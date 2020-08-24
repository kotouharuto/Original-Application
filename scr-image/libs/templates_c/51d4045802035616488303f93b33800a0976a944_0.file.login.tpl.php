<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-14 00:52:46
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f35e05ea85059_96463065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d4045802035616488303f93b33800a0976a944' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/login.tpl',
      1 => 1597366366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f35e05ea85059_96463065 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

.signUpbox {
    text-align: center;
}

.signUpbox a {
    text-decoration:none;
}

.signUpbox a:hover {
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

<form action="AuthCheck" method="POST">
    <div class="emailbox">
        <p class="forminfo">メールアドレス</p>
        <input type="email">
    </div><br><br>
    <div class="passbox">
        <p class="forminfo">メールアドレス</p>
        <input type="password">
    </div><br><br>

    <button class="loginbtn">
        　ログインする　　
    </button><br><br>
</form>
<div class="signUpbox">
    <p>アカウントをお持ちでない方はこちらから</p>
    <a href="signUp.php">アカウントを作成する</a>
</div>

<footer>

</footer>

</body>
</html><?php }
}
