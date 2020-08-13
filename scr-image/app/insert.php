<?php

//挿入処理ファイル
function INSERT() {
    try {
        $pdo = db_connect();
        $pdo->beginTransaction();
        $sql = "INSERT INTO trainingmenu (menu, num, setnum) VALUES (:menu, :num, :setnum)";
        $stmh = $pdo->prepare($sql);
        $stmh->bindValue(':menu', $_POST['menu'], PDO::PARAM_STR);
        $stmh->bindValue(':num', $_POST['num'], PDO::PARAM_STR);
        $stmh->bindValue(':setnum', $_POST['setnum'], PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        header('Location:menupost.php');
    } catch (PDOException $Exception) {
        $pdo->rollback();
        print  "error：". $Exception->getMessage();
    }
    return $pdo;
}
INSERT();
?>