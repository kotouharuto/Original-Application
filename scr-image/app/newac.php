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
<?php
require_once "../libs/init.php";

session_start();
$pdo = db_connect();

// signupがあったら処理を実行
if(isset($_POST['signup'])) {
    $username = $_POST['username'];
    //POSTのValidate
    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo '入力された値が不正です。';
        return false;
    }
        
    // パスワードの正規表現
    if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,30}+\z/i', $_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    } else {
        echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ8~30文字以内で設定してください。';
        return false;
    }
    
    // データ挿入
    try {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmh = $pdo->prepare($sql);
        $stmh->execute([$username, $email, $password]);
        ?> 
        <div class="alert alert-success" role="alert">登録が完了しました。</div>
        <?php
    } catch(PDOExceptiomn $Exception) {
        ?>
        <div class="alert alert-danger" role="alert">登録済みのメールアドレスです。</div>
        <?php
    }
}

$smarty = getSmarty();
$smarty->display('../libs/templates/newac.tpl');
?>
</body>
</html>