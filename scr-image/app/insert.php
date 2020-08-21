<?php
require_once '../libs/init.php';

$pdo = db_connect();
$pdo->beginTransaction();
$sql = "SELECT user_id from users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['user_id'] = $row['user_id'];
$user_id = $_SESSION['user_id'];
$menu = $_POST['menu'];
$num = $_POST['num'];
$setnum = $_POST['setnum'];
try {
    INSERT($pdo, $user_id, $menu, $num, $setnum);
    header('Location: menupost.php');
} catch(PDOException $Exception) {
    $pdo->rollback();
    print 'エラー：' . $Exception->getMeesage();
}