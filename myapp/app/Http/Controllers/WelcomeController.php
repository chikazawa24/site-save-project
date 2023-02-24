<?php

namespace App\Http\Controllers;

use App\Services\Signin\IndexService;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request, IndexService $service){
        $param = $request->all();
        if(isset($param['result'])){
            $login_flg = $param['result']['res_flg'];
        }else{
            $login_flg = config('my.app.FLAG_OFF');
        }
        return view('top.index',[
            'login_flg' => $login_flg
        ]);
    }
}
