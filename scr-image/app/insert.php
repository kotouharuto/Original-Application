<?php
require_once '../libs/init.php';
use App\Request;
$date = Request::get('date');
global $date;
$user_id = $_SESSION['user_id'];
$menu = $_POST['menu'];
$num = $_POST['num'];
$setnum = $_POST['setnum'];
$menunull = empty($menu);
$numnull = empty($num);
$setnumnull = empty($setnum);
if($menunull or $numnull or $setnumnull) {
    header("Location: menupost.php?error=正しく入力してください");
} else if(is_numeric($num) == false) {
    header("Location: menupost.php?error=正しく入力してください");
} else if(is_numeric($setnum) == false) {
    header("Location: menupost.php?error=正しく入力してください");
}
$pdo = db_connect();
$pdo->beginTransaction();
try {
    // メニュー挿入処理
    INSERT($pdo, $date, $user_id, $menu, $num, $setnum);
    // 挿入が完了したらリダイレクト
    header('Location: menupost.php?date='. $date);
}  catch(PDOException $Exception) {
    $pdo->rollback();
    $Exception->getMessage();
    echo $Exception;
    header("Location: menupost.php?date=$date&error=正しく入力してください");
}
