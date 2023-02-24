<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>会員登録</title>
</head>

<br>
<br>
<br>

<body>
    <div>
        <!--フォーム-->
        <form name="mainForm" action="{{ route('user.signup.action') }}" id="mainForm" method="post">
            @csrf
            <center>
                <h1 class="contact-title">会員登録</h1>
                <p>ID, Passwordご入力の上, 「登録」ボタンをクリックしてください.</p>
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
            <input type="submit"value="登録する">
        </form>

    </div>
</body>

</html>