<?php
require_once '../libs/init.php';
use App\Request;

// menupost.phpからinsertが送信されたら処理を実行
if(isset($_REQUEST['insert'])) {
    $sql =  "SELECT email FROM users WHERE email = :email";
    if($sql) {
        $pdo = db_connect();
        $pdo->beginTransaction();
        $date = Request::get('date');
        global $date;
        $user_id = $_SESSION['user_id'];
        $menu = $_POST['menu'];
        $num = $_POST['num'];
        $setnum = $_POST['setnum'];
        try {
            // バリデーション
            EmptNumCheck();
            // メニュー挿入処理
            INSERT($pdo, $date, $user_id, $menu, $num, $setnum);
            // 挿入が完了したらリダイレクト
            header('Location: menupost.php?date='. $date);
        } catch(PDOException $Exception) {
            $pdo->rollback();
            $Exception->getMessage();
            header("Location: menupost.php?date=$date&error=正しく入力してください");
        }
    }
}