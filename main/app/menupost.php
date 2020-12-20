<?php
require_once "../libs/init.php";


// ログインしていなかったらログインしてもらう
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

// エラーがあったら表示
if (isset($_GET['error'])) {
    echo $_GET['error'];
}


use App\Request;

$datetime = Request::get('date');

// $datetimeをただの文字じゃなくする
$date = date('Ymd',strtotime($datetime));

//menupost.phpで日付を表示するための変数
$datetext = date('Y年m月d日',strtotime($datetime));

// $datetimeを受け取っている場合
if(isset($datetime)) {
    try {
        $pdo = db_connect();
        $menus = fetchAllMenus($pdo, $_SESSION['user_id'], $date);
    } catch (PDOException $Exception) {
        print "error：". $Exception->getMessage();
    }
    
} else {
    //$datetimeがなかったらカレンダーにリダイレクトする
    header("Location: calendar.php");
}

// Smarty接続
$smarty = getSmarty();
$smarty->assign('menus', $menus);
$smarty->assign('date', $date);
$smarty->assign('datetext', $datetext);
$smarty->assign('USERNAME', $_SESSION['USERNAME']);
$smarty->display('menupost.tpl');