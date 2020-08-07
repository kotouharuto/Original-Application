<?php

function DELETE($id) {
    require_once "dbconnect.php";
    $pdo = db_connect();
    try {
        $pdo->beginTransaction();
        $sql = "DELETE FROM trainingmenu WHERE id = :id";
        $stmh = $pdo->prepare($sql);
        $stmh->bindValue(':id', $id, PDO::PARAM_INT);
        $stmh->execute();
        $pdo->commit();
        header("Location:menupost.php");
    } catch(PDOException $Exception) {
        $pdo->rollback();
        print 'エラー：'. $Exception->getMessage();
    }
    return $pdo;
}

if(isset($_GET['action']) && $_GET['action'] == 'delete' && $_GET['id'] > 0) {
    DELETE($_GET['id']);
}

?>