<?php
require_once '../libs/init.php';

$callname_text = "こんにちは". htmlspecialchars($_SESSION['USERNAME']) ."さん。".'<br>'."今日も筋トレを楽しみましょう。";

// Smarty接続
$smarty = getSmarty();
$smarty->assign('callname_text', $callname_text);
$smarty->display('home.tpl');