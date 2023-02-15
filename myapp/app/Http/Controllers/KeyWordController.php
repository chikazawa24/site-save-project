<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyWordController extends Controller
{
    public function index(){
        return view('keyword.search');
    }

    public function search(){
        return view('keyword.search');
    }
}
