<?php

namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\User;
use Validator;
class LoginController extends Controller
{
    public function index()
    {
        return view('login/create');
        // dd($res);
    }
    public function login_do(Request $request)
    {
        $post = request()->except(["_token"]);
        $validator = Validator::make($post,
        [
        'email' => 'required',
        'pwd' => 'required',
        ],[
        'email.required'=>'邮箱必填',
        'pwd.required'=>'密码必填',
        ]); 
        $a = $validator->customMessages;
        // dd($a);
        if ($validator->fails()) {
            return view("Login.create",["a"=>$a]);
         }
        // dump($post);exit;
        $User = User::where("email",$post["email"])->first();
        // dump($User);exit;
        if($User==''){
            return redirect('login');
        }
        if(($User->pwd)!=$post["pwd"]){
            $key = "0";
            $user = Redis::incr("key");
            // echo $user;
            if($user>=5){
                die;
            }
            return redirect('login');
        }
        // if(($User->email)!=$post['email']){
        //     $key = "0";
        //     $user = Redis::incr('key');
        //     echo"密码错误".$user;
        //     if($key>=5){
            //     echo"失败";
            // }
        //     return redirect('login')->with('msg','邮箱错误');
        // }
        session(['User'=>$User]);
        return redirect('admin');
    }

 
}
