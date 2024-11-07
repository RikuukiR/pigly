<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/step2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <title>初期体重登録画面</title>
</head>

<body>
    <main>
        <div class="form-container">
            <div class="ttl">PiGLy</div>
            <div class="sub-ttl">新規会員登録</div>
            <div class="step">STEP2 体重データの入力</div>
            <form class="form" action="{{ route('registration.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="current_weight">現在の体重</label>
                    <div class="input-with-unit">
                        <input type="number" id="current_weight" name="current_weight" placeholder="現在の体重を入力" required>
                        <span class="unit">kg</span>
                    @error('name')
                        <span class="error-message" style="color: red;">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="target_weight">目標の体重</label>
                    <div class="input-with-unit">
                        <input type="number" id="target_weight" name="target_weight" placeholder="目標の体重を入力" required>
                        <span class="unit">kg</span>
                    @error('name')
                        <span class="error-message" style="color: red;">{{ $message }}</span>
                    @enderror
                    </div>
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
                        <button type="submit" class="form-button__create">アカウントの作成</button>
                    </form>
                </div>
            </form>
        </div>
    </main>
</body>
</html>