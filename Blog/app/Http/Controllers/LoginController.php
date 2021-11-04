<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Support\Facades\Mail;
class LoginController extends Controller
{
    //

    public function index(Request $request) {
        if($request->isMethod('post')){ 
            // Kiểm tra dữ liệu nhập vào
            $rules = [
                'Email' =>'required|email|max:255', // chi gom chu hoac so va khong ket thuc bang so
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
                
                return redirect('Login')->withErrors($validator)->withInput();
            } else {

                if (Auth::attempt(['Email' => $request->input("Email"), 'password' => $request->input("Password")])) {
                    return view('main');
                  
                } else {
                    
                    return view('login')->withErrors("Email hoặc mật khẩu không đúng");
                  
                }
                
            }
        }
		else return view('Login');
	}

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
    
}
