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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <title>体重管理画面</title>
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
            <a href="{{ route('weight_logs.goal_setting') }}" class="set-btn">目標体重設定</a>
          </div>
          <div class="header__btn-logout">
            <a href="/login" class="logout-btn">ログアウト</a>
          </div>
        </div>
    </header>

    <main>
      <div class="container">
        <div class="middle-header">
          <div class="target-weight">目標体重　　kg</div>
          <div class="target-difference">目標まで　　kg</div>
          <div class="new-weight">最新体重　　kg</div>
        </div>

        <div class="container__log">
          <button class="main__btn-add" type="submit">データを追加</button>
          @foreach ($weightLogs as $weightLog)
          <form action="{{ route('weight_logs.update', ['weightLogId' => $weightLog->id]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="main__btn-edit" type="submit">✏️</button>
          </form>
          @endforeach
        </div>
      </div>
  </main>
</body>
</html>




