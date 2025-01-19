<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KakeiBook - 登録完了</title>
    <link rel="stylesheet" href="{{ asset('css/register_complete.css') }}">
</head>
<body>
    <div class="container">
        <h1>KakeiBook</h1>
        <h2>ユーザー登録完了</h2>
        <p>ユーザー登録ありがとうございます！<br>下記ボタンから利用できます。</p>
        <div class="navigation">
            <a href="{{ route('top') }}" class="nav-button">TOP画面</a>
            <a href="{{ route('expense.create') }}" class="nav-button">収支登録</a>
            <a href="{{ route('income.create') }}" class="nav-button">収入登録</a>
        </div>
    </div>
</body>
</html>
