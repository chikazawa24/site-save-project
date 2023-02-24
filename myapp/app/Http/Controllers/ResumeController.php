<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Resume\IndexService;

class ResumeController extends Controller
{
    public function index(Request $request, IndexService $service){
        return view('resume.index');
    }

    public function action(Request $request, IndexService $service){
        $param = $request->all();

        $result = $service->updateUserdata($param);

        if($result == config('my.app.FLAG_ON')){
            return redirect(route('user.setting.resume.done'), ['login_id' => $param['login_id']]);
        }else{
            return redirect(route('user.setting.resume'));
        }
    }

    public function done(Request $request, IndexService $service){
        $param = $request->all();

        $user_data = $service->getUserDataById($param);
        return view('resume.done', ['user_data' => $user_data]);
    }
}
