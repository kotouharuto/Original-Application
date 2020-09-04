<?php

//DB接続
function db_connect() 
{
    $db_user = 'root';
    $db_pass = 'root';
    $db_host = 'localhost';
    $db_name = 'tr_ng';
    $db_type = 'mysql';

    $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch(PDOException $Exception) {
        die('エラー：'. $Exception->getMessage());
    }
    return $pdo;
}

//メニュー取得
function fetchAllMenus($pdo, $user_id) {
    $pdo = db_connect();
    $sql = "SELECT * FROM trainingmenu WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

//メニュー追加
// function addTrainingMenu($menu, $set, $set_num)
// {

// }

//メニュー削除
function deleteTrainingMenu($pdo, $id)
{
    $sql = "DELETE FROM `trainingmenu` WHERE `id` = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

//空、数字チェック
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

// 挿入処理
function INSERT($pdo, $user_id, $memu, $num, $setnum) {
    $sql = "INSERT INTO trainingmenu (user_id, date, menu, num, setnum) VALUES (:user_id, :date, :menu, :num, :setnum)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
    $stmt->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
    $stmt->bindValue(':menu', $_POST['menu'], PDO::PARAM_STR);
    $stmt->bindValue(':num', $_POST['num'], PDO::PARAM_STR);
    $stmt->bindValue(':setnum', $_POST['setnum'], PDO::PARAM_STR);
    $stmt->execute();
    $pdo->commit();
}

//Smarty接続
function getSmarty()
{
    require_once("../libs/smarty/Smarty.class.php");
    $smarty = new Smarty();
    $smarty->template_dir = APPLICATION_DIR. 'libs/templates';
    $smarty->compile_dir  = APPLICATION_DIR. 'libs/templates_c';
    $smarty->config_dir   = APPLICATION_DIR. 'libs/config';
    $smarty->cache_dir    = APPLICATION_DIR. 'libs/cache';

    return $smarty;
}

?>