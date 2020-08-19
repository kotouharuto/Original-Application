<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
require_once "../libs/init.php";

session_start();

if(isset($_POST['login'])) {
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '入力された値が不正です。';
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

    // user_idが存在しているか確認
    if(!isset($row['user_id'])) {
        echo '会員IDが間違っています。';
    }
    
    //emailがDB内に存在しているか確認
    if(!isset($row['email'])) {
        echo 'メールアドレス又はパスワードが間違っています。';
        return false;
    }
    
    //パスワード確認後にsessionにメールアドレスを渡す
    if(password_verify($password, $row['password'])) {
        session_regenerate_id(true); //session_idを新しく生成し、置き換える
        $_SESSION['ID'] = $row['id'];
        $_SESSION['EMAIL'] = $row['email'];
        ?>
        <div class="alert alert-primary" role="alert">ログインに成功しました。</div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger" role="alert">メールアドレスまたはパスワードが間違っています。</div>
        <?php
        return false;
    }
}
$smarty = getSmarty();
$smarty->display('../libs/templates/login.tpl');

?>