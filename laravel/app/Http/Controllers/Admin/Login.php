<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Login extends Controller
{
    // public function index($id,Request $request){
    public function index(Request $request){
        // var_dump(request());
        // var_dump($id);

        
        // var_dump($request->get('username')); //获取get数据
        // var_dump($request->all());  //获取全部
        // var_dump($request->only(['username','password'])); //白名单，只收username和password
        // var_dump($request->except(['username'])); //黑名单，除了username其它全收
        
        // var_dump($request->file('file'));
        return view('login.index');
    }
    public function login(Request $request){
        $data = $request->input();
        var_dump($data);
        // var_dump($request->server());
        var_dump($request->file());
    }
}
