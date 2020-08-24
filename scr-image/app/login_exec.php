<?php
require_once "../libs/init.php";

// 今日やること(0824)：コードを順に冷静になって見直していく。
//             間違いがあったらすぐに修正。
// 今日中に問題解決(絶対！！)

//ログイン処理
function Login() {
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '入力された値が不正です。';
            header('Location: login.php');
            return false;
        }
        
        //DB内でPOSTされたメールアドレスを検索
        try {
            $pdo = db_connect();
            $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->execute([$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        
        //emailがDB内に存在しているか確認
        if(!isset($row['email'])) {
            echo 'メールアドレス又はパスワードが間違っています。';
            header('Location: login.php');
            return false;
        }
        
        //パスワード確認後にsessionにメールアドレスを渡す
        if(password_verify($password, $row['password'])) {
            session_regenerate_id(true); //session_idを新しく生成し、置き換える
            $_SESSION['user_id'] = $row['user_id'];
            $user_id = $_SESSION['user_id'];
            ?>
        <div class="alert alert-primary" role="alert">ログインに成功しました。</div>
        <?php
        header("Location: menupost.php");
        } else {
            ?>
            <div class="alert alert-danger" role="alert">メールアドレスまたはパスワードが間違っています。</div>
            <?php
            header("Location: login.php");
            return false;
        }
    }
}

Login();