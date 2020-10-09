<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/create');
        // dd($res);
    }
    public function login_do(Request $request)
    {
        $post = request()->except(['_token']);
        // dump($post);exit;
        $User = User::where('email',$post['email'])->first();
        if(($User->pwd)!=$post['pwd']){
            return redirect('login')->with('msg','密码错误');
        }
        if(($User->email)!=$post['email']){
            return redirect('login')->with('msg','邮箱错误');
        }
        session(['User'=>$User]);
        return redirect('admin');
    }

 
}
