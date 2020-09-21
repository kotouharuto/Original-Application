<?php
require_once "../libs/init.php";

// ログインしている場合
if (isset($_SESSION['user_id'])) {
    header("Location: calendar.php");
}

$smarty = getSmarty();

//エラーメッセージを表示
if (isset($_GET['error'])) {
    $smarty->assign('error', $_GET['error']);
}

$smarty->display('login.tpl');