<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}" />
    <title>create</title>
</head>

<body>
    <main>
        <div class="form-container">
            <div class="ttl">PiGLy</div>
            <div class="sub-ttl">新規会員登録</div>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" placeholder="名前を入力" required>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="メールアドレスを入力" required>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="パスワードを入力" required>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <form action="{{ route('initialWeight') }}" method="POST">
                @csrf
                    <button type="submit" class="btn-next">次に進む</button>
                    <a href="/login">ログインはこちら</a>
                </form>
            </form>
        </div>
        


    </main>
</body>
</html>