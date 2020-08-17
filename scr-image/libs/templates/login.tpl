{* Smarty_html/login.tpl *}

{* ログインファイル *}
<!DOCTYPE html>
<html lang="ja">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
@media (max-width: 1000px) {
.logintitle {
    font-size: 20px;
    text-align: center;
    font-weight: bold;
}
input {
    width: 60%;
    
}
input:hover {
    border: 1px solid #da3c41;
	outline: none;
	box-shadow: 0 0 5px 1px rgba(218,60,65, .5);
}

span {
}

form {
    text-align: center;
}



.forminfo {
    margin: 0;
    font-size: 12px;
}
.loginbtn {
    color: white;
    height: 40px;
    background: #FF6666;
    border-radius: 30px;
    width: 50%;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    text-decoration: none;
}

.newacbox {
    text-align: center;
}

.newacbox a {
    text-decoration:none;
}

.newacbox a:hover {
    color: red;
}

.loginbtn:hover {
    opacity: 0.9;
}

footer {
    width: 100%;
    background-color: #89c7de;
    color: #fff;
    text-align: center;
    padding: 30px 0;
    height: 100px;
    position: absolute;/*←絶対位置*/
    bottom: 0; /*下に固定*/
}


}
</style>

<head>
<title>ログインページ</title>
</head>
<body>
<h1 class="logintitle mt-5">新しいフィットネス生活を始めましょう</h1><br>

<form action="login.php" method="POST">
    <div class="emailbox">
        <p class="forminfo">メールアドレス</p>
        <input type="email" name="email">
    </div><br><br>
    <div class="passbox">
        <p class="forminfo">パスワード</p>
        <input type="password" name="password">
    </div><br><br>

    <button class="loginbtn" name="login">
        　ログインする　　
    </button><br><br>
</form>
<div class="newacbox">
    <p>アカウントをお持ちでない方はこちらから</p>
    <a href="newac.php">アカウントを作成する</a>
</div>

<footer>

</footer>

</body>
</html>