<?php
    require_once "../libs/init.php";
    
    $pdo = db_connect();
    
        
    $username = $_POST['username'];
        
    //POSTのValidate
    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header("Location: signup.php?error=入力された値が不正です。");
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
            
            return false;
        }
        
        // データ挿入
        try {
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username, $email, $password]);
            ?> 
        <div class="alert alert-primary" role="alert">登録が完了しました。</div>
        <a href="login.php">ログインしてください</a>
        <?php
        header("Location: login.php");
    } catch(PDOExceptiomn $Exception) {
        ?>
        <div class="alert alert-danger" role="alert">登録済みのメールアドレスです。</div>
        <?php
    }




