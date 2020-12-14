<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 03:37:08
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc85d64667ad2_72161110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d4045802035616488303f93b33800a0976a944' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/login.tpl',
      1 => 1602769110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc85d64667ad2_72161110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.logintitle {
    font-size: 20px;
    text-align: center;
    font-weight: bold;
}

.fitniis {
    margin: 0;
}

input {
    width: 50%;
    height: 40px;
    text-align: center;
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
    font-size: 14px;
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

.accbtn {
    color: white;
    height: 40px;
    background: #FF6666;
    border-radius: 30px;
    width: 50%;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

footer {
    width: 100%;
    background-color: #b8daff;
    color: #fff;
    text-align: center;
    padding: 30px 0;
    height: 50px;
    position: absolute;
    bottom: 0;
}

.logintitle {
    margin: 0;
}

.err-message {
    text-align: center;
    color: red;
}
</style>

<head>
<title>ログインページ</title>
</head>
<body>
<header>
<h1 class="fitniis ml-4">fitniis</h1>
</header>
<h1 class="logintitle mt-3">新しいフィットネス生活を始めましょう</h1><br>

<form action="login_exec.php" method="POST">
    <div class="emailbox">
        <p class="forminfo">メールアドレス</p>
        <input type="email" name="email">
    </div><br><br>

    <div class="passbox">
        <p class="forminfo">パスワード</p>
        <input type="password" name="password">
    </div><br><br>

    <button type="submit" class="accbtn" name="login">ログインする</button>
</form>

<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
    <p class="err-message mt-5 mb-3">※<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>
<div class="signUpbox">
    <p>アカウントをお持ちでない方はこちらから</p>
    <a href="sign_up.php">アカウントを作成する</a>
</div>

<footer>

</footer>

</body>
</html><?php }
}
