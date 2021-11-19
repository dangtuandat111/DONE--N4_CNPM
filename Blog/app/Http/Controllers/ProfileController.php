<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class ProfileController extends Controller
{
    // Trang Profile
    public function index() {
        $banners = DB::table('posts')->limit(6)->get();

        $cats = DB::table('category')->get();

        $cmts = [];

        foreach($banners as $banner) {
            $count_cmt = DB::table('comment')->count();
            
            array_push($cmts,[$banner->id,$count_cmt]);
        }
        $tags = DB::table('tag')->get();
        $user = DB::table('users')->where('id','=',Auth::user()->id)->get(['id','FirstName','LastName','Email','About','Phone','Image']);
        
        return view('Profile',['banners' => $banners, 'cats' => $cats, 'cmts' => $cmts,'tags' => $tags, 'user' => $user]);
    }

    # Thay doi thong tin ca nhan
    public function submit(Request $request) {
        
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

    # THay doi mk
    public function ResetPass(Request $request) {
        if($request->isMethod('post')){
            $rules = [
                'Old_Password' => 'required|min:1|regex:/(^([a-zA-z\d]+)(\d+)?$)/',
                'Password' => 'required|min:1|regex:/(^([a-zA-z\d]+)(\d+)?$)/',
                'Confirm_Password' => 'required|min:1|regex:/(^([a-zA-z\d]+)(\d+)?$)/|same:Password'
            ];
            $messages = [

                'Old_Password.required' => 'Mật khẩu là trường bắt buộc',
                'Old_Password.min' => 'Mật khẩu phải chứa ít nhất 1 ký tự',
                'Old_Password.regex' => 'Mật khẩu không đúng định dạng',

                'Password.required' => 'Mật khẩu là trường bắt buộc',
                'Password.min' => 'Mật khẩu phải chứa ít nhất 1 ký tự',
                'Password.regex' => 'Mật khẩu không đúng định dạng',

                'Confirm_Password.required' => 'Mật khẩu là trường bắt buộc',
                'Confirm_Password.min' => 'Mật khẩu phải chứa ít nhất 1 ký tự',
                'Confirm_Password.regex' => 'Mật khẩu không đúng định dạng',
                'Confirm_Password.same' => 'Mật khẩu không khớp'
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            
            
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            } else {
                if ( $this->check(Auth::user()->Email,$request->Old_Password) ) {
                    $this->sendMail(Auth::user()->Email,Auth::user()->LastName);
                    DB::table('users')->where('email',Auth::user()->Email)->update([
                        'password' => bcrypt($request->Password)
                    ]);
                    Auth::logout();
                    return redirect('/Login')->with('thongbao','Please sign in');
                  
                } else {
                    return back()->withInput()->withErrors("Email or password is not correct");
                  
                }
                
            }
        }
        else return view('admin.resetPassword');
    }

    # Cap nhat db
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

    # Check password
    public function check($Email,$pass) {
        $value = DB::table('users')
        ->where('Email' ,'=', $Email)->get();
        $count = DB::table('users')
        ->where('Email' ,'=', $Email)->count();
        //dd( $value);
        if($count == 0 || $count>1 ) return false;
        if(Hash::check($pass, $value[0]->password)) {
            return true;
        }

        return false;
    }


    # Gui mail
    public function sendMail($Email,$LastName) {
        $mail = $Email;
        Mail::send('ResetPassEmail',['mail' => $mail, 'name' => $LastName ],function($message) use ($mail) {
            $message->to($mail,'');
        });

        if( count(Mail::failures()) > 0) {
            $error = '';

            foreach(Mail::failures() as $email_address) {
                $error = $error." - ".$email_address." <br />";
            }
            return back()->withError($error);
        }
        return back()->with('thongbao','Success send email.');
    }
}
