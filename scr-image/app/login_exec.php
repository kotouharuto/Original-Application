<?php
require_once "../libs/init.php";

function Login() {
    // エラーがあったら表示
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }
    
    // ログインしていない場合
    $email = $_POST['email'];
    $_SESSION['email'] = $_POST['email'];
    $password = $_POST['password'];
    
    
    // //DB内でPOSTされたメールアドレスを検索
    try {
        $pdo = db_connect();
        $row = Search_Email($pdo, $email);
    } catch(\Exception $e) {
        echo $e->getMessage();
    }
    
    //emailがDB内に存在しているか確認
    if(!isset($row['email'])) {
        header('Location: login.php?error=メールアドレス又はパスワードが間違っています。');
        return false;
    }
    
    //パスワード確認後にsessionにメールアドレスを渡す
    if(password_verify($password, $row['password'])) {
        session_regenerate_id(true); //session_idを新しく生成し、置き換える
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['USERNAME'] = $row['username'];    
        $user_id = $_SESSION['user_id'];
        // ログインに成功したらcalendarphpリダイレクト
        header("Location: calendar.php");
    } else {
        // ログインに失敗したらlogin.phpにリダイレクト
        header("Location: login.php?error=メールアドレス又はパスワードが間違っています。");
        return false;
    }
}

Login();