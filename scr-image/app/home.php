<?php
require_once '../libs/init.php';
// $pdo = db_connect();
// $sql = "SELECT * FROM users";
// $stmt = $pdo->prepare($sql);
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// $stmt->execute();

$title_text = "こんにちは". htmlspecialchars($_SESSION['USERNAME']) ."さん。".'<br>'."今日も筋トレを楽しみましょう。";

$smarty = getSmarty();
$smarty->assign('title_text2', $title_text);
$smarty->display('home.tpl');