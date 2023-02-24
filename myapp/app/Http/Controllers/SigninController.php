<?php

namespace App\Http\Controllers;

use App\Services\Signin\IndexService;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(Request $request, IndexService $service){
        return view('signin.index');
    }

    public function auth(Request $request, IndexService $service){
        $param = $request->all();

        // DBにデータを見に行く＋データが一致すればログイン状態に
        $result = $service->checkData($param);

        // こけたときはindexにエラーメッセージとともにリダイレクトさせる
        if(isset($result)){
            // 正常系
            if($result['res_flg'] == config('my.app.FLAG_ON')){
                return redirect(route('user.top', [
                    'result' => $result
                ]));
            }else{
                // passwordミス
                return redirect(route('user.signin', [
                    'result' => $result
                ]));
            }
        }else{
            // データ取得失敗
            return redirect(route('user.signin', [
                'result' => $result
            ]));
        }
    }
}
