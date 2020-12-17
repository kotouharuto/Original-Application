<?php
require_once "../libs/init.php";

use App\Request;

//削除処理ファイル
$pdo = db_connect();
$date = Request::get('date');
try {
    $pdo->beginTransaction();
    $id = $_REQUEST['id'];
    deleteTrainingMenu($pdo, $id, $date);
} catch(PDOException $Exception) {
    $pdo->rollBack();
    print 'エラー：'. $Exception->getMessage();
}

// メニュー削除完了したらリダイレクト
if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete' && $_REQUEST['id'] > 0) {
    header("Location:menupost.php?date={$date}");
}