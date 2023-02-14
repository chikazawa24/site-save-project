<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(){
        return view('signin.index');
    }

    public function auth(Request $request){
        $param = $request->all();

        $login_id = $param['login_id'];
        $password = $param['password'];
        // DBにデータを見に行く＋データが一致すればログイン状態に
    }
}
