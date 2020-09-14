<?php
require_once "../libs/init.php";

function Login() {
    // エラーがあったら表示
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $_POST['email'];
        $password = $_POST['password'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location: login.php?error=入力された値が不正です。');
            return false;
        }

        
        //DB内でPOSTされたメールアドレスを検索
        try {
            $pdo = db_connect();
            $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');

            $stmt->execute([$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
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
            ?>
            <div class="alert alert-primary" role="alert">ログインに成功しました。</div>
            <?php
            header("Location: calendar.php");
        } else {
            header("Location: login.php?error=メールアドレス又はパスワードが間違っています。");
            return false;
        }
    }
}

Login();