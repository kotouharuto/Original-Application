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
        <p>今日の日付</p><input type="date" name="date">
        <p>体重</p><input type="number" step="0.001" name="weight"><br><br>
        <input type="submit" value="送信">
    </form>
</body>
<?php

require_once "../libs/init.php";

// DB接続
$pdo = db_connect();
$pdo->beginTransaction();
ini_set('display_errors', 0);

// 入力されたデータの受け取り
$date = $_POST['date'];
$weight = $_POST['weight'];

$datenull = empty($date);
$weightnull = empty($weight);

// 入力されたかチェック
if($date and $weight) {
    if($datenull or $weightnull) {
        header("Location: weight_chart.php"); // どちらか入力されていなければリダイレクト
        exit();
    } else if($datenull and $weightnull) {
        header("Location: weight_chart.php"); // どちらも入力されていなければリダイレクト
        exit();
    } else { // しっかりと入力されていればリダイレクト
        try {
            $sql = "INSERT INTO chart(date, weight) VALUES (:date, :weight)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':date', $date, PDO::PARAM_STR);
            $stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
            $stmt->execute();
            $pdo->commit();
        } catch(PDOException $Exception) {
            $pdo->rollback();
            $Exception->getMessage();
            echo $Exception;
            // header("Location: weight_chart.php");
            exit();
        }
    }
}

// 空の変数$date, $weightを用意(DBのデータを表示するために)
$date = '';
$weight = '';

//データ登録SQL作成
$stmt2 = $pdo->prepare("SELECT * FROM chart");
$status2 = $stmt2->execute();

while($r = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $date = $date . '"'. $r['date'].'",';
    $weight = $weight . '"'. $r['weight'].'",';
}

$date = trim($date, ",");
$weight = trim($weight, ",");
?>

<body>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo $date ?>],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $weight ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
</body>
</html>
