<?php

namespace App\Http\Controllers;

use App\Services\Signup\IndexService;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index(Request $request, IndexService $service){
        return view('signup.index');
    }

    public function action(Request $request, IndexService $service){
        // DBにデータを登録する系の処理
        $param = $request->all();
        // dd($param);
        if(isset($param)){
            $service->registUserData($param);
        }else{
            // パラメータが渡ってこない場合、TOPに戻す
            return redirect(route('user.top'));
        }

        return redirect(route('user.signup.done'));
    }

    public function done(Request $request, IndexService $service){
        return view('signup.done');
    }
}
