<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use App\Users;
use App\Code;
use Mail;

class AuthController extends Controller
{
    public function __construct(Users $musers, Code $mcode){
        $this->musers = $musers;
        $this->mcode  = $mcode;
    }
    public function login() {
    	return view('auth.auth.login');
    }
	public function postLogin(Request $request) {
    	$email    = $request->email;
    	$password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('admin.index.index');
        }else {
            return redirect()->route('auth.auth.login')->with('msg', 'Sai email hoặc password!');
        }
    }
    public function register(){
        return view('auth.auth.register');
    }
    public function postRegister(AuthRequest $request){
        $fullname  = $request->fullname;
        $email     = $request->email;
        $birthday  = $request->birthday;
        $phone     = $request->phone;
        // $gender   = $request->gender;
        $password = bcrypt($request->password);

        $data     = ['fullname' => $fullname,
                     'email'    => $email,
                     'birthday' => $birthday,
                     'phone'    => $phone,
                     'gender'   => 'Nam',
                     'password' => $password,
                    ];
        $result = $this->musers->addUser($data);
        return redirect()->route('auth.auth.login')->with('msg', 'Đăng ký tài khoản thành công!');
    }
    public function forgotPassword(){
        return view('auth.auth.forgotpassword');
    }
    public function postForgotPassword(Request $request){
        $email = $request->email;
        $check = $this->musers->findEmail($email);
        if($check){
            $code = strtoupper(substr(md5(microtime()), rand(0, 26), 5));
            $mail = [
                        'subcode' => $code,
                        ];
            Mail::send('vendor.mail.html.layout', $mail, function($msg) use($email){
                $msg->to($email)->subject('CLOTHES');
                $msg->from('phucduykhang16202@gmail', "CLOTHES | SHOP QUẦN ÁO");
            });
            // $data    = ['name_code' => $code,];
            $data = ['password' => bcrypt($code),];
            $this->musers->editPassEmail($email, $data);
            return redirect()->route('auth.auth.forgotpassword')->with('msg', 'Xác nhận thành công, bạn vui lòng kiểm tra lại email!');
            
        }else {
            return redirect()->route('auth.auth.forgotpassword')->with('msg', 'Email của bạn hiện không tồn tại!');
        }
    }
    // public function codeValidate(){
    //     return view('auth.auth.codevalidate');
    // }
    // public function postCodevalidate(Request $request){
    //     $code      = $request->name_code;
    //     $checkCode = $this->mcode->findCode($code);
    //     if($checkCode){
    //         return redirect()->route('auth.auth.changepassword')->with('msg', 'Xác nhận mã thành công');
    //     }else {
    //         return redirect()->route('auth.auth.codevalidate')->with('msg', 'Mã xác nhập của bạn không hợp lệ!');
    //     }
    // }
    // public function changePassword(){
    //     return view('auth.auth.changepassword');
    // }
    // public function postChangepassword(Request $request){
    //     $passwordCheck = $request->passwordCheck;
    //     if($passwordCheck){
    //         $password  = bcrypt($request->password);
    //         $data      = ['password' => $password,];
    //         $this->musers->editPassEmail($email, $password);
    //         return redirect()->route('auth.auth.login')->with('Đổi mật khẩu thành công');
    //     }else {
    //         return redirect()->route('auth.auth.changepassword')->with('Mật khẩu mới không cùng nhau vui lòng nhập lại');
    //     }
    // }
    public function logout() {
    	Auth::logout();
    	return redirect()->back();
    }
}
