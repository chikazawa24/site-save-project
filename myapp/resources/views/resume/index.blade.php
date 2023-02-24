@extends('common.base_layout')

@section('page_section')
    <p>会員情報の編集画面です</p>
    <form name="mainForm" action="{{ route('user.setting.resume.action') }}" id="mainForm" method="post">
        @csrf
        <center>
            <h1 class="contact-title">登録情報の更新</h1>
            <p>ID, Passwordご入力の上, 「更新する」ボタンをクリックしてください.</p>
        </center>
        <div>
            <center>
                <div>
                    <input type="id" id="login_id" name="login_id" placeholder="現在のログインID" value="{{ old('login_id') }}">
                </div>
                <br>
                <div>
                    <input type="id" id="new_login_id" name="new_login_id" placeholder="新しいログインID" value="{{ old('new_login_id') }}">
                </div>
                <br>
                <div>
                    <input type="password" id="login_password" name="login_password" placeholder="パスワード" value="{{ old('login_password') }}">
                </div>
                <br>
                <div>
                    <input type="text" id="last_name" name="last_name" placeholder="last_name" value="{{ old('last_name') }}">
                </div>
                <br>
                <div>
                    <input type="text" id="first_name" name="first_name" placeholder="first_name" value="{{ old('first_name') }}">
                </div>
            </center>
        </div>
        <input type="submit"value="更新する">
    </form>
@endsection