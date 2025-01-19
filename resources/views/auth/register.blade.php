<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KakeiBook - ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <h1>KakeiBook</h1>
        <p>ユーザー登録</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="ユーザー名" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="パスワード" required>
            </div>
            <button type="submit" class="btn">登録</button>
        </form>
    </div>
</body>
</html>
