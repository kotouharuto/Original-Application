<?php
require_once "../libs/init.php";

// Smarty接続
$smarty = getSmarty();

if (isset($_GET['error'])) {
    $smarty->assign('error', $_GET['error']);
}
$smarty->display('sign_up.tpl');