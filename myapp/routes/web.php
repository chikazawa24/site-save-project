<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\KeyWordController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\WithdrawalController;

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

Route::get('/', [WelcomeController::class, 'index']);// ホーム画面(各機能へのルートを用意)

// キーワード
Route::get('/keyword', [KeyWordController::class, 'index']);// キーワード一覧画面
Route::get('/keyword/search', [KeyWordController::class, 'search']);// キーワード検索画面

// ユーザ情報の登録
Route::get('/signup', [SignupController::class, 'index']);// 会員登録画面
// ユーザ情報の編集
Route::get('/setting/resume', [ResumeController::class, 'index']);// 会員情報の変更画面
// ユーザ情報の削除（退会）
Route::get('/withdrawal', [WithdrawalController::class, 'index']);// 会員登録画面

// ページの登録
Route::get('/input', [InputController::class, 'index']);// ページの登録画面

// ページの詳細画面
