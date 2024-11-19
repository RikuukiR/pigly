<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/target.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <title>目標体重変更画面</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                PiGLy
            </a>
        </div>
        <div class="header__btn">
          <div class="header__btn-set">
            <a href="/weight_logs/goal_setting" class="set-btn">目標体重設定</a>
          </div>
          <div class="header__btn-logout">
            <a href="/login" class="logout-btn">ログアウト</a>
          </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="container__box">
                <form action="/weight_logs" method="POST">
                    @csrf
                    <p class="middle-header">目標体重設定</p>
                    <div class="form-group">
                        <div class="input-with-unit">
                            <input type="text" id="weight" name="weight" placeholder="50.0" required>
                            <span class="unit">kg</span>
                        </div>
                    </div>

                    <div class="container__btn">
                        <button class="container__btn-back" type="button" onclick="history.back()">戻る</button>
                        <button class="container__btn-update" type="submit">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>




