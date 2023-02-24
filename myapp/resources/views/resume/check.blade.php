@extends('common.base_layout')

@section('page_section')
    <p>会員情報の編集前画面です</p>
    <form name="mainForm" action="{{ route('user.setting.resume.check_action') }}" id="mainForm" method="post">
        @csrf
        <center>
            <h1 class="contact-title">登録情報のチェック</h1>
            <p>ID, Passwordご入力の上, 「確認する」ボタンをクリックしてください.</p>
        </center>
        <div>
            <center>
                <div>
                    <input type="id" id="login_id" name="login_id" placeholder="ログインID" value="{{ old('login_id') }}">
                </div>
                <br>
                <div>
                    <input type="password" id="login_password" name="login_password" placeholder="パスワード" value="{{ old('login_password') }}">
                </div>
            </center>
        </div>
        <input type="submit"value="確認する">
    </form>
@endsection