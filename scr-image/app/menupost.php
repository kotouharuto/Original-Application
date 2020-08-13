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
require_once '../libs/init.php';

try {
    $pdo = db_connect();
    $menus = fetchAllMenus($pdo);
} catch (PDOException $Exception) {
    print "error：". $Exception->getMessage();
}




$smarty = getSmarty();
$smarty->assign('menus', $menus);
$smarty->display('../libs/templates/menupost.tpl');


?>

</body>
</html>
