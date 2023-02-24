<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\KeyWordController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ResumeController;

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

Route::get('/top', [WelcomeController::class, 'index'])->name('user.top');// ホーム画面(各機能へのルートを用意)

// キーワード
Route::get('/keyword', [KeyWordController::class, 'index'])->name('user.keyword');// キーワード一覧画面
Route::get('/keyword/search', [KeyWordController::class, 'search'])->name('user.keyword.search');// キーワード検索画面

// ユーザ情報の登録
Route::get('/signup', [SignupController::class, 'index'])->name('user.signup');// 会員登録画面
Route::post('/signup/action', [SignupController::class, 'action'])->name('user.signup.action');
Route::get('/signup/done', [SignupController::class, 'done'])->name('user.signup.done');

// ログインTOP
Route::get('/signin', [SigninController::class, 'index'])->name('user.signin');// ログイン画面
Route::post('/signin/auth', [SigninController::class, 'auth'])->name('user.login.action');

// ユーザ情報の編集
Route::get('/setting/resume', [ResumeController::class, 'index']);// 会員情報の変更画面
// ユーザ情報の削除（退会）
Route::get('/withdrawal', [WithdrawalController::class, 'index']);// 会員登録画面

// ページの登録
Route::get('/input', [InputController::class, 'index']);// ページの登録画面

// ページの詳細画面

