<?php

namespace App\Http\Controllers;

use App\Services\Signin\IndexService;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request, IndexService $service){
        $param = $request->all();

        return view('top.index');
    }
}
