<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(Request $request){
        // return 111;
        // var_dump($request->input());
        $arr = $request->input();
        $file = $request->file();
        $html = "<a href='www.baidu.com'>Baidu</a>";
        return view('user.index',compact('arr','html'));
    }
}
