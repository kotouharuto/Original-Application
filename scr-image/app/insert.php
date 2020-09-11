<?php
require_once '../libs/init.php';

if(isset($_POST['insert'])) {
    if(isset())
    $pdo = db_connect();
    $pdo->beginTransaction();
    $user_id = $_SESSION['user_id'];
    $date = $_POST['date'];
    $menu = $_POST['menu'];
    $num = $_POST['num'];
    $setnum = $_POST['setnum'];
    try {
        INSERT($pdo, $date, $user_id, $menu, $num, $setnum);
        header('Location: menupost.php?date='. $date);
    } catch(PDOException $Exception) {
        $pdo->rollback();
        print 'エラー：' . $Exception->getMessage();
    }
}
?>