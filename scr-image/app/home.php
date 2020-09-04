<?php
require_once '../libs/init.php';
// $pdo = db_connect();
// $sql = "SELECT * FROM users";
// $stmt = $pdo->prepare($sql);
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// $stmt->execute();

echo "こんにちは". htmlspecialchars($_SESSION['USERNAME']) ."さん。今日も筋トレを楽しみましょう。";


$smarty = getSmarty();
$smarty->display('home.tpl');