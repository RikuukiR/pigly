<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <title>login</title>
</head>

<body>
    <main>

    <form action="/" method="POST">
    @csrf
    <!-- フォームフィールド -->
    <button class="main__btn-login" type="submit">ログイン</button>

    <button class="main__btn-create-acc" type="submit">アカウント作成はこちら</button>
</form>


    </main>
</body>
</html>