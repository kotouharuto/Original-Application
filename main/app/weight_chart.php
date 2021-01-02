<?php
include('../libs/init.php');

// ログインしていなかったらログインしてもらう
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

// DB接続
$pdo = db_connect();
$pdo->beginTransaction();

// 空の変数$date, $weightを用意(DBのデータを表示するために)
$user_id = '';
$date = '';
$weight = '';
$stmt = '';

$stmt = fetchAllWeight($pdo, $_SESSION['user_id']);

$date = trim($date, ",");
$weight = trim($weight, ",");

// Smarty接続
$smarty = getSmarty();
$smarty->assign('USERNAME', $_SESSION['USERNAME']);
$smarty->assign('date', $date);
$smarty->assign('weight', $weight);
$smarty->display('weight_chart.tpl');
?>