<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">

</head>
<body>
<?php
// ⚪️現在の課題点
// メニューを追加したら、フォームの下に追加したメニューが表示されてしまう

require_once "dbconnect.php";
$pdo = db_connect();
require_once "/Applications/MAMP/bin/php/php7.4.2/lib/php/Smarty/smarty/Smarty.class.php";

$smarty = new Smarty();

$smarty->cache_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/cache";
$smarty->config_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/config";
$smarty->template_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/templates";
$smarty->compile_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/templates_c";



//削除処理
require_once "menu_delete.php";

//データ取得
$sql = "SELECT * FROM trainingmenu WHERE 1";
$stmh = $pdo->prepare($sql);
$stmh->execute();

$menus = [];
while(1) {
    $row = $stmh->fetch(PDO::FETCH_ASSOC);
    if($row == false)
    {
    break;
}
$menus[] = $row;
}

$smarty->assign('menus', $menus);

$smarty->display('menupost.tpl');


?>

    
    

</body>
</html>
