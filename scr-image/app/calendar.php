<?php
require_once '../libs/init.php';

//今日の日付を持ったオブジェクト
$current_date = new DateTime();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

//日曜日の始まりにする処理
if(0 < $current_date->format('w')) {
    $current_date->modify(sprintf('- %d days', $current_date->format('w')));
}

$last_date = (clone $current_date)->modify('+ 7 days');
$dates = [];
while($current_date < $last_date) {
    $dates[] = clone $current_date;
    $current_date->modify('+ 1 day');
}

$smarty = getSmarty();
$smarty->assign('dates', $dates);
$smarty->display('calendar.tpl');