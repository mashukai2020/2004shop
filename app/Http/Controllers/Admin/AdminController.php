<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = User::all();
        return view('admin/index',['res'=>$res]);
        // dd($res);
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request){
        // $time = time();
        $post = request()->except(['_token']);
        $post['time'] = time();
        $post['ip'] = $_SERVER['REMOTE_ADDR'];
        // dump($post);exit;
        $res = \DB::table('admin')->insert($post);
        if($res){
            return redirect('/admin');
        }

    }
    public function destory($id)
    {
        //
        $res= \DB::table('admin')->where('uid',$id)->delete();
        if($res){
            echo json_encode(['code'=>'00000','msg'=>'删除成功！']);die;
        }
    }
    public function tui(Request $request)
    {
        $request->session('User')->flush(); 
        return redirect('login');
    }


 
}
