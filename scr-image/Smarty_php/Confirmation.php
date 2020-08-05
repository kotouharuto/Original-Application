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

function EmptNumCheck(){
    $menu = $_POST['menu'];
    $menunull = empty($menu);
    
    $num = $_POST['num'];
    $numnull = empty($num);
    
    $setnum = $_POST['setnum'];
    $setnumnull = empty($setnum);
    
    if($menunull or $numnull or $setnumnull) {
        print "正しく入力してください";
        print "<br>";
        print "<br>";
    } else if(is_numeric($num) == false) {
        print "正しく入力してください";
        print "<br>";
        print "<br>";
    } else if(is_numeric($setnum) == false) {
        print "正しく入力してください";
        print "<br>";
        print "<br>";
    } else {
        require_once "insert.php";
        print '『'.$menu. '』を';
        print $num.'(回or秒)、';
        print $setnum. 'セットで追加しました!';
        print '<br>';
        print '<br>';
        if(isset($_POST['menu'])) {
            header("Location:menupost.php");
        }
    }
}

EmptNumCheck();

    
?>
<a href="menupost.php">メニューを確認する</a>