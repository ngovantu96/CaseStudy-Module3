<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function checkLogin(Request $request){
       $user = [
           'username' => $request->username,
           'password' => $request->password,
        ];
        if (!Auth::attempt($user)) {
            return redirect()->route('login')->with('error','tài khoản đăng nhập hoặc mật khẩu sai');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
