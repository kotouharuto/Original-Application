<?php
require_once '../libs/init.php';
require_once '../libs/function.php';

use App\Request;
// $request = new Request();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$datetime = $_REQUEST['date'];

$date = date('Ymd',strtotime($datetime));
$datetext = date('Y年m月d日',strtotime($datetime));

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
    $smarty->assign('datetext', $datetext);
    $smarty->display('menupost.tpl');
} else {
    header("Location: login.php");
}