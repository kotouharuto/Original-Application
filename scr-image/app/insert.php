<?php
require_once '../libs/init.php';

$pdo = db_connect();
$pdo->beginTransaction();
$menu = $_POST['menu'];
$num = $_POST['num'];
$setnum = $_POST['setnum'];
try {
    INSERT($pdo, $user_id, $menu, $num, $setnum);
    header('Location: menupost.php');
} catch(PDOException $Exception) {
    $pdo->rollback();
    print 'エラー：' . $Exception->getMessage();
}
?>