<?php

use App\Request;

//DB接続(トレーニングメニュー)
function db_connect() 
{
    // $db_user = 'fitniiis0321_t';
    // $db_pass = 'ktharuto0321';
    // $db_host = 'mysql1.php.xdomain.ne.jp';
    // $db_name = 'fitniiis0321_trng';
    // $db_type = 'mysql';

    $db_user = "ktharuto";
    $db_pass = "zgtkaisurper666";
    $db_host = "localhost";
    $db_name = "tr_ng";
    $db_type = "mysql";

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
function fetchAllMenus($pdo, $user_id, $date) 
{
    $sql = "SELECT * FROM trainingmenu WHERE user_id = :user_id AND date = :date";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':date', $date, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

//体重データ取得
function fetchAllWeight($pdo, $user_id) {
    global $stmt, $date, $weight;
    $sql = "SELECT * FROM chart WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    while($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $date = $date . '"'. $r['date'].'",';
        $weight = $weight . '"'. $r['weight'] .'",';
    }
    return $stmt->fetchAll();
}

// メニュー挿入処理
function INSERT($pdo, $date, $user_id, $menu, $num, $setnum) 
{
    $sql = "INSERT INTO trainingmenu (user_id, date, menu, num, setnum) VALUES (:user_id, :date, :menu, :num, :setnum)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $stmt->bindValue(':menu', $menu, PDO::PARAM_STR);
    $stmt->bindValue(':num', $num, PDO::PARAM_STR);
    $stmt->bindValue(':setnum', $setnum, PDO::PARAM_STR);
    $stmt->execute();
    $pdo->commit();
}

//体重データ挿入処理
function INSERT2($pdo, $user_id, $date, $weight) {
    $sql = "INSERT INTO chart(user_id, date, weight) VALUES (:user_id, :date, :weight)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_STR);
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
    $stmt->execute();
    $pdo->commit();
    header("Location:weight_chart.php");
    exit();
}

//メニュー削除
function deleteTrainingMenu($pdo, $id, $date)
{
    $sql = "DELETE FROM `trainingmenu` WHERE id = :id AND date = :date";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':date', $date, PDO::PARAM_INT);
    $stmt->execute();
    $pdo->commit();
}

//ログアウト処理
function Logout() 
{
    require_once "../libs/init.php";
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
}

//Smarty接続
function getSmarty()
{
    $smarty = new Smarty();
    $smarty->template_dir = APPLICATION_DIR. 'libs/templates';
    $smarty->compile_dir  = APPLICATION_DIR. 'libs/templates_c';
    $smarty->config_dir   = APPLICATION_DIR. 'libs/config';
    $smarty->cache_dir    = APPLICATION_DIR. 'libs/cache';
    
    return $smarty;
}


//新規アカウント作成
function Create_User($pdo, $username, $email, $password) 
{
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt;
}

//email検索
function Search_Email($pdo, $email) 
{
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
?>