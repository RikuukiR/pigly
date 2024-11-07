<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <title>ログイン画面</title>
</head>

<body>
    <main>
        <div class="form-container">
            <div class="ttl">PiGLy</div>
            <div class="sub-ttl">ログイン</div>
            <form class="form" action="{{ route('registration.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="メールアドレスを入力" required value="{{ old('email') }}">
                    @error('email')
                        <span class="error-message" style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="パスワードを入力" required>
                    @error('password')
                        <span class="error-message" style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red;">{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                </form>
                <div class="form-button">
                    <form action="{{ route('weight_logs.store') }}" method="POST">
                    @csrf
                        <button type="submit" class="form-button__login">ログイン</button>
                    </form>
                    <a class="form-button__create" href="/register/step1">アカウント作成はこちら</a>
                </div>
            </form>
                </div>
            </form>
        </div>
    </main>
</body>
</html>