<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KakeiBook - ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <h1>KakeiBook</h1>
        <p>ログインしてください<br>Please Login</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="ユーザー名" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="パスワード" required>
            </div>
            <button type="submit" class="btn">ログイン</button>
        </form>
        <a href="{{ route('register') }}" class="register-link">新規会員登録の方はこちら</a>
    </div>
</body>
</html>
