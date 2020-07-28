<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php
require_once "dbconnect.php";

$menu = $_POST['menu'];
$num = $_POST['num'];
$setnum = $_POST['setnum'];

print '『'.$menu. '』を';
print $num.'(回or秒)、';
print $setnum. 'セットで追加しました!';
print '<br>';
print '<br>';

?>
<a href="menupost.php">メニューを確認する</a>
<?php


//データ送信処理
try {
    $pdo->beginTransaction();
    $sql = "INSERT INTO trainingmenu (menu, num, setnum) VALUES (:menu, :num, :setnum)";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(':menu', $_POST['menu'], PDO::PARAM_STR);
    $stmh->bindValue(':num', $_POST['num'], PDO::PARAM_STR);
    $stmh->bindValue(':setnum', $_POST['setnum'], PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit();
} catch (PDOException $Exception) {
    $pdo->rollback();
    print  "error：". $Exception->getMessage();
}

//送信されたデータの表示
//munupost.phpへの遷移(確認ボタンを押したら)
?>