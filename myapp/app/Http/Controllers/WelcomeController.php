<?php

namespace App\Http\Controllers;

use App\Services\Signin\IndexService;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request, IndexService $service){
        $param = $request->all();
        // DBにデータを見に行く＋データが一致すればログイン状態に
        $result = $service->checkData($param);

        return view('top.index');
    }
}
