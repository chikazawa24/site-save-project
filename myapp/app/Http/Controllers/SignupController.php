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
        if(isset($param)){
            $result = $service->registUserData($param);
            if($result == config('my.app.FLAG_ON')){
                return redirect(route('user.signup.done'));
            }else{
                // DBへの登録に失敗した
                \Log::debug('Controllerから');
                return redirect(route('user.signup'));
            }
        }else{
            // パラメータが渡ってこない場合、TOPに戻す
            return redirect(route('user.top'));
        }
    }

    public function done(Request $request, IndexService $service){
        return view('signup.done');
    }
}
