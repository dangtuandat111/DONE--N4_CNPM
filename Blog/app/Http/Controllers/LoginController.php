<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Support\Facades\Mail;
class LoginController extends Controller
{
    // Dang nhap
    public function Login(Request $request) {
        if($request->isMethod('post')){ 
            $validator = $this->checkInput($request);
            if( $validator == True) {
                if (Auth::attempt(['Email' => $request->input("Email"), 'password' => $request->input("Password")])) {
                    return redirect('/home');
                  
                } else {
                    return back()->withErrors("Email hoặc mật khẩu không đúng.");
                }
            }
            else return back()->withErrors($validator)->withInput();
        }
		else return view('Login');
	}

    // Dang ki 
    public function Register(Request $request) {
        if($request->isMethod('post')){ 
            $validator = $this->checkUser($request);
            if( $validator == True) {
                DB::table('users')->insert(
                    [
                    'Email' => $request->Email,
                    'Password' => bcrypt($request->Password),]
                );
                return back()->with('thongbao','Email đã đăng kí tài khoản.');
            }
            else return back()->withErrors($validator)->withInput();
        }
		else return view('Login');
	}

    // Gui mail
    public function sendMail() {
        Mail::send('Email',[],function($message) {
            $message->to('hkim661990@gmail.com','');
        });

        if( count(Mail::failures()) > 0) {
            $error = '';

            foreach(Mail::failures() as $email_address) {
               $error = $error." - ".$email_address." <br />";
            }
            return back()->withError('Loi');
        }
        return back()->with('thongbao','Từ chối thành công');
    }
    
    # Kiem tra du lieu dau vao
    public function checkInput($request) {
        $rules = [
            'Email' =>'required|email|max:255', 
            'Password' => 'required|min:1|regex:/(^([a-zA-z\d]+)(\d+)?$)/'
        ];
        $messages = [
            'Email.required' => 'Email là trường bắt buộc',
            'Email.max' => 'Tên email không quá 255 ký tự',
            'Email.email' => 'Email không đúng định dạng',
            'Email.regex' => 'Email không đúng định dạng',
            'Password.required' => 'Mật khẩu là trường bắt buộc',
            'Password.min' => 'Mật khẩu phải chứa ít nhất 1 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return $validator;
        }
        else return True;
    }

    # Kiem tra tai khoan
    public function checkUser($request) {
        $rules = [
            'Email' =>'required|email|max:255', 
            'Name' =>'required',
            'Password' => 'required|min:1|regex:/(^([a-zA-z\d]+)(\d+)?$)/',
            'Re-Password' =>'required|same:Password|min:1|regex:/(^([a-zA-z\d]+)(\d+)?$)/'
        ];
        $messages = [
            'Email.required' => 'Email là trường bắt buộc',
            'Email.max' => 'Tên email không quá 255 ký tự',
            'Email.email' => 'Email không đúng định dạng',
            'Email.regex' => 'Email không đúng định dạng',

            'Name.required' => 'Tên là trường bắt buộc',

            'Password.required' => 'Mật khẩu là trường bắt buộc',
            'Password.min' => 'Mật khẩu phải chứa ít nhất 1 ký tự',
            'Password.regex' => 'Password không đúng định dạng',

            'Re-Password.required' => 'Mật khẩu là trường bắt buộc',
            'Re-Password.min' => 'Mật khẩu phải chứa ít nhất 1 ký tự',
            'Re-Password.regex' => 'Mật khẩu không đúng định dạng',
            'Re-Password.same' => 'Mật khẩu không khớp'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return $validator;
        }
        else {
            $count = DB::table('users')->where('Email','=',$request->Email)->count();
            if($count >0) {
                return 'Tài khoản đã tồn tại';
            }
        }
        return True;
        
    }


    # Dang xuat
    public function Logout() {
        Auth::logout();
        return Redirect::to('/home');
    }
}
