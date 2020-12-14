<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-22 04:34:16
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f697ec83dc229_24774868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3959594968961227e31d34c763e694115225ea82' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/calendar.tpl',
      1 => 1600749255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f697ec83dc229_24774868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<style>
    body {
    }

    h2 {
        text-align: center;
        font-weight: bold;
    }

    .date_btn {
        background-color:#49a9d4;
        border-radius: 5px;
        margin: 0 auto;
        text-align: center;
        height: 100px;
        width: 60%;
        margin-top: 70px;
    }

    .date_btn a {
        text-decoration: none;
        color: black;
        line-height: 90px;
        font-size: 18px;
        font-weight: bold;
    }

    .datebox {
    }
    @media (max-width:1100px) {
    .nav-item i {
            display: block;
            font-size: 24px;
        }


        .nav-list {
            display: table;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .nav-item {
        display: table-cell;
        /* padding: 2px 0px; */
        }

        .nav-list {
            table-layout: fixed;
            width: 100%;
        }

        .nav-list {
            border-collapse: collapse;
        }

        .nav-item {
        }

        .navline {
            background: gray;
            width: 100%;
            height: 1px;
        }

        .global-nav {
            position: fixed;
            left: 0;
            bottom: 0;
            background: #F5F5F5;
            height: 60px;
        }

        .nav-item a span {
            font-size: 15px;
            color: black;
            opacity: 1 !important;
            display: table-cell;
            vertical-align: middle;
        }

        .date_announce {
            margin-bottom: 80px;
        }
    }
</style>
</head>
<body>
<h2 class="date_announce">メニューを追加したい日にちを選択してください</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dates']->value, 'date');
$_smarty_tpl->tpl_vars['date']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->do_else = false;
?>
<div class="date_btn">
    <a href="menupost.php?date=<?php echo $_smarty_tpl->tpl_vars['date']->value->format('Ymd');?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value->format('Y/m/d');?>
</a>
</div><br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    
<nav class="global-nav">
        <!-- <div class="navline"></div> -->
        <ul class="nav-list">
            <li class="nav-item">
                <a href="calendar.php">
                  <i class="fas fa-star"></i>
                  <span>筋トレ</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="stopwatch.html">
                  <i class="fas fa-history"></i>
                  <span>タイマー</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="logout.php">
                  <i class="fas fa-history"></i>
                  <span>ログアウト</span>
                </a>
            </li>
        </ul>
        </div>
    </nav>
</body>
</html><?php }
}
