<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>

<br>
<br>
<br>

<body>
    <div>
        <!--フォーム-->
        <form name="mainForm" action="{{ route('user.top') }}" id="mainForm" method="get">
            <center>
                <h1 class="contact-title">ログイン</h1>
                <p>ID, Passwordご入力の上, 「認証」ボタンをクリックしてください.</p>
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
            <input type="submit"value="送信する">
        </form>

    </div>
</body>

</html>