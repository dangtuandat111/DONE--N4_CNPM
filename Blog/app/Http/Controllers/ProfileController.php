<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use DB;

class ProfileController extends Controller
{
    //

    public function index() {
        $banners = DB::table('posts')->limit(6)->get();

        $cats = DB::table('category')->get();

        $cmts = [];

        foreach($banners as $banner) {
            $count_cmt = DB::table('comment')->count();
            
            array_push($cmts,[$banner->id,$count_cmt]);
        }
        $tags = DB::table('tag')->get();
        //dd(Auth::user()->id);
        $user = DB::table('users')->where('id','=',Auth::user()->id)->get(['id','FirstName','LastName','Email','About','Phone','Image']);
        //dd($user);
        return view('Profile',['banners' => $banners, 'cats' => $cats, 'cmts' => $cmts,'tags' => $tags, 'user' => $user]);
    }

    public function submit(Request $request) {
        //dd($request);
        if($request->isMethod('post')){
            $rules = [
                'First_Name' =>'required||max:50',
                'Last_Name' => 'required|max:50',
                'Phone' => ['required','min:10', 'max:10','regex:/((09|03|07|08|05)+([0-9]{8})\b)/'],
                'About' => 'required',
                'Image' => 'required|file'
            ];
            $messages = [
                'First_Name.required' => 'First Name cannot be left blank',
                'First_Name.max' => 'First Name cannot exceed 50 characters',

                'Last_Name.required' => 'Last Name cannot be left blank',
                'Last_Name.max' => 'Last Name cannot exceed 50 characters',

                'Phone.required' => 'Phone cannot be left blank',
                'Phone.min' => 'Phone need 10 characters',
                'Phone.max' => 'Phone need 10 characters',
                'Phone.regex' => 'Phone is not in the correct format',

                'About.required' => 'About cannot be left blank',
                'Image.required' => 'Image cannot be left blank',
                'Image' => 'Image must be a file.'
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            else {
                $this->saveSubmit($request);
                return back()->with('thongbao','Successful change!');
            }
        }
    }

    public function saveSubmit($request){
        //dd($request->Image->getClientOriginalName());
        $file = $request->Image;
        ( $file->move('upload', $file->getClientOriginalName()) );
        DB::table('users')->where('id', Auth::user()->id)->update(
            ['FirstName' => $request->First_Name,
            'LastName' =>$request->Last_Name,
            'Phone' => $request->Phone,
            'About' => $request->About,
            'Image' => $request->Image->getClientOriginalName(),]
        );
        //dd($request('Image')->store('Image'));
    }
}
