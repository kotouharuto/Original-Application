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
            INSERT2($pdo, $_SESSION['user_id'], $date, $weight);
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