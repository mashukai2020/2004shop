<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = \DB::table('admin')->select();
        return view('admin.index',['res'=>$res]);
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
        // dump($post);exit;
        $res = \DB::table('admin')->insert($post);
        if($res){
            return redirect('/admin');
        }

    }
    /**
     * Show the form for creating a new resource.
     *执行添加
     * @return \Illuminate\Http\Response
     */
 
}
