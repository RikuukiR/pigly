<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
    <title>登録機能画面</title>
</head>

<body>
    <header class="header">Weight Logを追加</header>

    <main>
        <div class="container">
            <form action="/weight_logs" method="POST">
                @csrf
                <div class="form-group">
                    <label class="text" for="date">日付</label>
                    <span class="require">必須</span>
                    <input type="date" id="date" name="date" placeholder="2024年1月1日" required>
                </div>
                <div class="form-group">
                    <label class="text" for="weight">体重</label>
                    <span class="require">必須</span>
                    <div class="input-with-unit">
                        <input type="text" id="weight" name="weight" placeholder="50.0" required>
                        <span class="unit">kg</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text" for="calorie">摂取カロリー</label>
                    <span class="require">必須</span>
                    <div class="input-with-unit">
                        <input type="text" id="calorie" name="calorie" placeholder="1200" required>
                        <span class="unit">cal</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text" for="exercise-time">運動時間</label>
                    <span class="require">必須</span>
                    <input type="text" id="exercise-time" name="exercise_time" placeholder="00:00" required>
                </div>
                <div class="form-group">
                    <label class="text" for="exercise-content">運動内容</label>
                    <textarea id="exercise-content" name="exercise_content" placeholder="運動内容を追加" rows="8"required></textarea>
                </div>

                <div class="container__btn">
                    <button class="container__btn-back" type="button" onclick="history.back()">戻る</button>
                    <button class="container__btn-regis" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>