<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>TOP</title>
    </head>
    <body>
        <p>トップ画面です</p>
        <a href="{{url(route('user.signup'))}}">会員登録</a>
        <a href="{{url(route('user.signin'))}}">ログイン</a>
    </body>
</html>