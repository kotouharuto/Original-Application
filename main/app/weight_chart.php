<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>体重グラフ</title>
    <style>
        header {
        width: 100%;
        height: 50px;
    }
    .global-nav {
            display: none;
        }

        .logo-area {
            font-size: 35px;
            text-align: center;
        }

        .nowtitle {
            display: none;
        }

        .title {
            font-size: 25px;
            position: relative;
            top: 40px;
        }

        .nav-drawer {
            position: relative;
            margin-top: 10px;
            margin-left: 10px;
        }

        /*チェックボックス等は非表示に*/
        .nav-unshown {
        display:none;
        }

        /*アイコンのスペース*/
        #nav-open {
        display: inline-block;
        width: 30px;
        height: 22px;
        vertical-align: middle;
        }

        /*ハンバーガーの形をCSSで表現*/
        #nav-open span, #nav-open span:before, #nav-open span:after {
        position: absolute;
        height: 3px;/*線の太さ*/
        width: 25px;/*長さ*/
        border-radius: 3px;
        background: #555;
        display: block;
        content: '';
        cursor: pointer;
        }
        
        #nav-open span:before {
        bottom: -8px;
        }

        #nav-open span:after {
        bottom: -16px;
        }

        /*閉じる用の薄黒箇所*/
        #nav-close {
        display: none;
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: black; */
        opacity: 0;
        transition: .3s ease-in-out;
        }

        /*メニューの中身*/
        #nav-content {
        overflow: auto;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        width: 90%;
        max-width: 330px;/*最大幅（お好みで調整を）*/
        height: 100%;
        background: #fff;
        transition: .3s ease-in-out;
        -webkit-transform: translateX(-105%);
        transform: translateX(-105%);
        }

        /*チェックがついたら表示させる*/
        #nav-input:checked ~ #nav-close {
        display: block;
        opacity: .5;
        }

        #nav-input:checked ~ #nav-content {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
        box-shadow: 6px 0 25px rgba(0,0,0,.15);
        }

        .header-logo-menu{
        display: flex;
        display: -moz-flex;
        display: -o-flex;
        display: -webkit-flex;
        display: -ms-flex;
        flex-direction: row;
        -moz-flex-direction: row;
        -o-flex-direction: row;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        background: white;
        }

        /*ロゴやサイトタイトルをセンタリング*/
        .logo-area{
            text-align:center;
            margin:auto;
            font-size:  25px;
            
        }

        ul {
            list-style: none;
        }

        .box {
            display: none;
        }

        .humline {
            width: 100%;
            height: 1px;
            margin-top: 40px;
            margin-bottom: 40px;
            background: rgb(206, 198, 198);
        }

        .date_announce {
            text-align: center;
            color: red;
            font-weight: bold;
        }

        .date_btn {
            width: 70%;
            height: 100px;
            background: skyblue;
            border-radius: 10px;
            text-align: center;
            font-size: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin: 0 auto;
        }

        .date_btn a {
            color: black;
            font-weight: bold;
            text-align: center;
        }

        .margin-box {
            margin-top: 40px;
            margin-top: 40px;
        }

        .under-line {
            weight: 100%;
            height: 2px;
            background: #dcdcdc;
        }

    @media (max-width: 700px) {
        .under-line {
            weight: 100%;
            height: 2px;
            background: #dcdcdc;
        }

        header {
            width: 100%;
            height: 50px;
            background: white;
        }
    }
    </style>
</head>
<body>
<header>
  <h1 class="nowtitle">体重管理</h1>
    <div class="header-logo-menu">
    <div class="nav-drawer mt-3 ml-3">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
            <ul>
                <li class="mt-4"><a href="calendar.php">筋トレ</a></li>
                <div class="humline"></div>
                <li class="mt-4"><a href="weight_chart.php">体重管理</a></li>
                <div class="humline"></div>
                <li><a href="stopwatch.html">ストップウォッチ</a></li>
                <div class="humline"></div>
                <li><a href="logout.php">ログアウト</a></li>
                <div class="humline"></div> 
            </ul>
        </div>
    </div>
    <div class="logo-area">体重管理</div>
    </div>
</header>
<div class="under-line"></div>

    <form method="post" action="weight_chart.php">
        <p>今日の日付</p><input type="date" name="date">
        <p>体重</p><input type="number" step="0.01" name="weight"><br><br>
        <input type="submit" value="送信">
    </form>

<?php
include('../libs/init.php');

// DB接続
$pdo = db_connect();
$pdo->beginTransaction();


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
            header("Location: weight_chart.php");
            exit();
        } catch(PDOException $Exception) {
            $pdo->rollback();
            $Exception->getMessage();
            echo $Exception;
            header("Location: weight_chart.php");
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
            labels: [<?php echo $date ?>],//各棒の名前（name)
            // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'ほげ'],//各棒の名前（name)
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $weight ?>],//各縦棒の高さ(値段)
                // data: [12, 19, 3, 5, 2, 20],//各縦棒の高さ(値段)
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