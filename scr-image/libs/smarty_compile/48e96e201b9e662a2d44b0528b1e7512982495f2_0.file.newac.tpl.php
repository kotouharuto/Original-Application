<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-19 11:29:14
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/signUp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3d0d0acee171_38076496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48e96e201b9e662a2d44b0528b1e7512982495f2' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/signUp.tpl',
      1 => 1597836541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d0d0acee171_38076496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {

}
.logoimg {
    width: 100px;
    height: 100px;
}
.form {
    margin: 0 auto;
}
.actitle {
    font-size: 20px;
    text-align: center;
    font-weight: bold;
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

.lglink {
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

.infotext {
    color: red;
    font-size: 12px;
}

.forminfo {
    margin: 0;
    font-size: 14px;
}

</style>
</head>
<body>

<form action="signUp.php" method="post" class="mt-5" style="text-align: center;">
<h1 class="actitle mb-3">アカウント作成</h1>
<div>
    <label class="forminfo">お名前</label><br>
    <input type="text" name="username">
</div><br>

<div>
    <label class="forminfo">メールアドレス</label><br>
    <input type="email" name="email">
</div><br>

<div>
    <label class="forminfo">パスワード</label><br>
    <p class="infotext">※8~30字以内の半角英数字で入力してください</p>
    <input type="password" name="password">
</div><br>


<button type="submit" class="accbtn" name="signup">アカウントを作成する</button>
</form>

<div class="lglink mt-4">
<p>既にアカウントをお持ちの場合はこちらから</p>
<a href="login.php">ログインする</a>
</div>

<footer>

</footer>
</body>
</html><?php }
}
