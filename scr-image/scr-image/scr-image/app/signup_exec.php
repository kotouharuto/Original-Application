<?php
    require_once "../libs/init.php";  
    $username = $_POST['username'];
        
    //POSTのValidate
    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=入力された値が不正です。");
    }

    // メールアドレスの重複チェック
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: signup.php?error=入力された値が不正です。');
        return false;
    }
        
        // パスワードの正規表現
        if (preg_match('/\A(?=.*[a-z])(?=.*?\d)[a-z\d]{8,30}+\z/i', $_POST['password'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else if(!isset($_POST['password'])) {
            header("Location: signup.php?error=パスワーを入力してください。");
        } else {
            // エラ〜メッセージをsignup.phpに表示させる
            header("Location: signup.php?error=パスワードは半角英数字をそれぞれ1文字以上含んだ8~30文字以内で設定してください。");
            // header("Location: signup.php?error=password_format");
        }
        
        // データ挿入
    try {
        $pdo = db_connect();
        Create_User($pdo, $username, $email, $password);
        header("Location: login.php");
    } catch(PDOExceptiomn $Exception) {
        $pdo->rollback();
        print "error：". $Exception->getMessage();
    }