<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-11 11:47:13
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/weight_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd35c41cdea62_75259199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98bde18956cf83889e61be473b9d7e4198d26e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/weight_chart.tpl',
      1 => 1607687232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd35c41cdea62_75259199 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体重グラフ</title>
</head>
<body>
    <header>
        <div>
            <div><a class="navbar-brand" href="calendar.php">筋トレメニュー入力へ</a></div>
            <div><a class="navbar-brand" href="stopwatch.html">ストップウォッチへ</a></div>
            <div><a class="navbar-brand" href="logout.php">ログアウトする</a></div>
        </div>
    </header>

    <form method="post" action="weight_chart.php">
        <p>今日の日付</p><input type="text" name="date">
        <p>体重</p><input type="text" name="weight"><br><br>
        <input type="submit" value="送信">
    </form>
</body>
</html><?php }
}
