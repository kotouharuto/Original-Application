<?php

require_once '../libs/init.php';
//削除処理ファイル
$pdo = db_connect();
try {
    $pdo->beginTransaction();
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM `trainingmenu` WHERE `id` = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $pdo->commit();
} catch(PDOException $Exception) {
    $pdo->rollBack();
    print 'エラー：'. $Exception->getMessage();
}

if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete' && $_REQUEST['id'] > 0) {
    header("Location:menupost.php");
}
?>