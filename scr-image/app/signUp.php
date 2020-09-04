<?php
require_once "../libs/init.php";

$smarty = getSmarty();

if (isset($_GET['error'])) {
    $smarty->assign('error', $_GET['error']);
}
$smarty->display('signUp.tpl');