<?php
require_once '../libs/init.php';

$pdo = db_connect();
$pdo->beginTransaction();
$user_id = $_SESSION['user_id'];
$date = $_SESSION['date'];
$menu = $_POST['menu'];
$num = $_POST['num'];
$setnum = $_POST['setnum'];
try {
    INSERT($pdo, $date, $user_id, $menu, $num, $setnum);
    header('Location: menupost.php');
} catch(PDOException $Exception) {
    $pdo->rollback();
    print 'エラー：' . $Exception->getMessage();
}
?>