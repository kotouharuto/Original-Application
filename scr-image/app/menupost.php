<?php
require_once '../libs/init.php';
require_once '../libs/function.php';

$request = new Request();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
$datetime = Request::get('date');
$date = date('Ymd',strtotime($datetime));

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