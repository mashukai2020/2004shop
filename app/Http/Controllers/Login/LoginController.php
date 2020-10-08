<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login/create');
        // dd($res);
    }
    public function login_do(Request $request)
    {
        $post = request()->except(['_token']);
        // dump($post);exit;
        $admin = Admin::where('email',$post['email'])->first();
        if(($admin->pwd)!=$post['pwd']){
            return redirect('login')->with('msg','密码错误');
        }
        if(($admin->email)!=$post['email']){
            return redirect('login')->with('msg','用户名错误');
        }
        session(['admin'=>$admin]);
        return redirect('admin');
    }

 
}
