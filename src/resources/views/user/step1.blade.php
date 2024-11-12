<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/step1.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <title>会員登録画面</title>
</head>

<body>
    <main>
        <div class="form-container">
            <div class="ttl">PiGLy</div>
            <div class="sub-ttl">新規会員登録</div>
            <div class="step">STEP1 アカウント情報の登録</div>
            <form class="form" action="{{ route('registration.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" placeholder="名前を入力" required value="{{ old('name') }}">
                    @error('name')
                        <span class="error-message" style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
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
                
                <div class="form-button">
                    <button type="submit" class="form-button__create">次に進む</button>
                    <a class="form-button__login" href="/login">ログインはこちら</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>