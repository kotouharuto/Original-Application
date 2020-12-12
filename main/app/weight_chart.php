<?php
include('../libs/init.php');

$pdo = db_connect();
$pdo->beginTransaction();

$dates = $_POST['date'];
$weights = $_POST['weight'];
try {
    $sql = "INSERT INTO chart(date, weight) VALUES (:date, :weight)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':date', $dates, PDO::PARAM_STR);
    $stmt->bindValue(':weight', $weights, PDO::PARAM_STR);
    $stmt->execute();
    $pdo->commit();
} catch(PDOException $Exception) {
    $pdo->rollback();
    $Exception->getMessage();
    echo $Exception;
    header("Location: weight_chart.php");
}

$date = '';
$weight = '';

//データ登録SQL作成
$stmt2 = $pdo->prepare("SELECT * FROM chart");
$status2 = $stmt2->execute();

while($r = $stmt2->fetch(PDO::FETCH_ASSOC)) {
    $date = $dates . '"'. $r['date'].'",';
    $weight = $weights . '"'. $r['weight'].'",';
}

$date = trim($date, ",");
$weight = trim($weight, ",");

//Smarty接続
$smarty = getSmarty();
$smarty->assign('date',  $date);
$smarty->assign('weight',  $weight);
$smarty->display('weight_chart.tpl');