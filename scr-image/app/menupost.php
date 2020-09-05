<?php
require_once '../libs/init.php';

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$_SESSION['date'] = $_GET['date'];


try {
    $pdo = db_connect();
    $menus = fetchAllMenus($pdo, $_SESSION['user_id'], $_SESSION['date']);
} catch (PDOException $Exception) {
    print "error：". $Exception->getMessage();
}

$smarty = getSmarty();
$smarty->assign('menus', $menus);
$smarty->assign('date', $_SESSION['date']);
$smarty->display('menupost.tpl');