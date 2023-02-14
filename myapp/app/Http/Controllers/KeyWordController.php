<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyWordController extends Controller
{
    public function index(){
        return view('search');
    }

    public function search(){
        return view('search');
    }
}
