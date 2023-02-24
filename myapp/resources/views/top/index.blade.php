@extends('common.base_layout')
@section('page_section')
    <p>トップ画面です</p>
    @if ($login_flg == config('my.app.FLAG_ON'))
        <a href="{{url(route('user.input'))}}">ページ登録</a>
        <a href="{{url(route('user.setting.resume'))}}">設定</a>
    @else
        <a href="{{url(route('user.signup'))}}">会員登録</a>
        <a href="{{url(route('user.signin'))}}">ログイン</a>
    @endif
@endsection