<?php

namespace App\Http\Controllers;

use App\Services\Signin\IndexService;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(){
        return view('signin.index');
    }

    public function auth(Request $request, IndexService $service){
        $param = $request->all();

        // DBにデータを見に行く＋データが一致すればログイン状態に
        $result = $service->checkData($param);

        if(isset($result)){
            return;
        }
    }
}
