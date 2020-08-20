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
function fetchAllMenus($pdo, $user_id)
{
    $sql = "SELECT * FROM trainingmenu WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
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
function INSERT() {
    try {
        $pdo = db_connect();
        $pdo->beginTransaction();
        $sql = "INSERT INTO trainingmenu (user_id, menu, num, setnum) VALUES (:user_id, :menu, :num, :setnum)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
        $stmt->bindValue(':menu', $_POST['menu'], PDO::PARAM_STR);
        $stmt->bindValue(':num', $_POST['num'], PDO::PARAM_STR);
        $stmt->bindValue(':setnum', $_POST['setnum'], PDO::PARAM_STR);
        $stmt->execute();
        $pdo->commit();
        header('Location:menupost.php');
    } catch (PDOException $Exception) {
        $pdo->rollback();
        print  "error：". $Exception->getMessage();
    }
    return $pdo;
}

//Smarty接続
function getSmarty()
{
    $smarty = new Smarty();
    $smarty->template_dir = APPLICATION_DIR. 'libs/smarty_template';
    $smarty->compile_dir  = APPLICATION_DIR. 'libs/smarty_compile';
    $smarty->config_dir   = APPLICATION_DIR. 'libs/smarty_config';
    $smarty->cache_dir    = APPLICATION_DIR. 'libs/smarty_cache';

    return $smarty;
}

?>