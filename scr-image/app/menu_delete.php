<?php
require_once '../libs/init.php';

use App\Request;

//削除処理ファイル
$pdo = db_connect();
$date = Request::get('date');
try {
    $pdo->beginTransaction();
    $id = $_REQUEST['id'];
    var_dump($date);
    // deleteTrainingMenu($pdo, $id, $date);
    $sql = "DELETE FROM `trainingmenu` WHERE `id` = :id AND date = :date";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':date', $date, PDO::PARAM_INT);
    $stmt->execute();
    $pdo->commit();
} catch(PDOException $Exception) {
    $pdo->rollBack();
    print 'エラー：'. $Exception->getMessage();
}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete' && $_REQUEST['id'] > 0) {
    header("Location:menupost.php?date={$date}");
}