<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\KeyWordController;
use App\Http\Controllers\InputController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);// ホーム画面

// キーワード
Route::get('/keyword', [KeyWordController::class, 'index']);// キーワード検索画面
Route::get('/keyword/search', [KeyWordController::class, 'search']);// キーワード検索画面

// タグの登録
Route::get('/input', [InputController::class, 'index']);// キーワード検索画面
