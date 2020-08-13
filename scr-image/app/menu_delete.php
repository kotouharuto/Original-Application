<?php

require_once '../libs/init.php';
//削除処理ファイル
$pdo = db_connect();
try {
    $pdo->beginTransaction();
    $id = $_POST['id'];
    $sql = "DELETE FROM `trainingmenu` WHERE `id` = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $pdo->commit();
} catch(PDOException $Exception) {
    $pdo->rollBack();
    print 'エラー：'. $Exception->getMessage();
}

if(isset($_POST['action']) && $_POST['action'] == 'delete' && $_POST['id'] > 0) {
    DELETE($_POST['id']);
    header("Location:menupost.php");
}
?>