<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request){
        $param = $request->all();

        return view('top.index');
    }
}
