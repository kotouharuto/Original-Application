<?php
require_once '../libs/init.php';

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
$date = $_GET['date'];

if(isset($date)) {
    try {
        $pdo = db_connect();
        $menus = fetchAllMenus($pdo, $_SESSION['user_id'], $date);
    } catch (PDOException $Exception) {
        print "error：". $Exception->getMessage();
    }
    
    $smarty = getSmarty();
    $smarty->assign('menus', $menus);
    $smarty->assign('date', $date);
    $smarty->display('menupost.tpl');
}