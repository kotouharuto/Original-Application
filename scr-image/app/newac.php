<!DOCTYPE html>
<html lang="en">
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
// if(isset($_SESSION['user']) !== "") {
    //     // header("Location: home.php");
    // }
    
    if(isset($_POST['signup'])) {
        $username = ['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $password = password_hash($password, PASSWORD_DEFAULT);
        
        try {
            $pdo->beginTransaction();
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue('username', $_POST['username'], PDO::PARAM_STR);
            $stmh->bindValue('email', $_POST['email'], PDO::PARAM_STR);
            if(preg_match('/\A[a-z\d]{8,30}+\z/i', $password)) {
                $stmh->bindValue('password', $_POST['password'], PDO::PARAM_STR);
            } else {
                print 'パスワードは8文字以上30文字以内の半角英数字で入力してください。';
            }
            $stmh->execute();
            $pdo->commit();
            ?>
            <div class="alert alert-success" role="alert">登録が完了しました</div>
            <?php
            // header("Location:home.php");
    } catch (PDOException $Exception) {
        $pdo->rollback();
        ?>
        <div class="alert alert-danger" role="alert">エラーが発生しました</div>
        <?php
    }
}

$smarty = getSmarty();
$smarty->display('../libs/templates/newac.tpl');
?>
</body>
</html>