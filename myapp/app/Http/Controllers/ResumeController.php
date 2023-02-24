<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Signup\IndexService;

class ResumeController extends Controller
{
    public function index(Request $request, IndexService $service){
        return view('signup.index');
    }
}
