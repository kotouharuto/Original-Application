<?php
require_once "../libs/init.php";

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
}

$smarty = getSmarty();

if (isset($_GET['error'])) {
    $smarty->assign('error', $_GET['error']);
}

$smarty->display('login.tpl');

?>