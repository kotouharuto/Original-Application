<!DOCTYPE html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体重グラフ</title>
</head>
<body>
    <header>
        <div>
            <div><a class="navbar-brand" href="calendar.php">筋トレメニュー入力へ</a></div>
            <div><a class="navbar-brand" href="stopwatch.html">ストップウォッチへ</a></div>
            <div><a class="navbar-brand" href="logout.php">ログアウトする</a></div>
        </div>
    </header>

    <form method="post" action="weight_chart.php">
        <p>今日の日付</p><input type="text" name="date">
        <p>体重</p><input type="text" name="weight"><br><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>