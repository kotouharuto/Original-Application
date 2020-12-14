<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-11 05:57:45
  from '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/menupost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd30a59c13212_05360373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88cafec2bb22ae93cd8de8c3302f34ecab912f47' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/scr-image/libs/templates/menupost.tpl',
      1 => 1607086582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd30a59c13212_05360373 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="ja">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<title>筋トレメニュー</title>

<style>
    body {
    padding-top:25px;
    background-color:gray;
    margin-left:10px;
    margin-right:10px;
    background: white;
    padding: 0;
    }

    .datetext {
        color: red;
    }

    .container {
    width: 60%;
    margin:0 auto;
    text-align:center;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
    background-color:#FAFAFA;
    /* border: 1px solid black; */
    }

    .head {
    -webkit-border-radius:6px 6px 0px 0px;
    -moz-border-radius:6px 6px 0px 0px;
    border-radius:6px 6px 0px 0px;
    background-color:#2ABCA7;
    color:#FAFAFA;
    }

    h2 {
    text-align:center;
    padding:18px 0 18px 0;
    font-size: 1.4em;
    }

    input {
    margin-bottom:10px;
    text-align:center;
    }

    textarea {
    height:100px;
    margin-bottom:10px;
    }

    input:first-of-type{
    margin-top:35px;
    }

    input, textarea {
    font-size: 1em;
    padding: 15px 10px 10px;
    font-family: 'Source Sans Pro',arial,sans-serif;
    border: 1px solid #cecece;
    background: #d7d7d7;
    color:#FAFAFA;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 80%;
    max-width: 600px;
    }

    ::-webkit-input-placeholder {
    color: #FAFAFA;
    }

    :-moz-placeholder {
    color: #FAFAFA;  
    }

    ::-moz-placeholder {
    color: #FAFAFA; 
    }

    :-ms-input-placeholder {  
    color: #FAFAFA;  
    }

    button {
    margin-top:15px;
    margin-bottom:25px;
    background-color:#2ABCA7;
    padding: 12px 45px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #2ABCA7;
    -webkit-transition: .5s;
    transition: .5s;
    display: inline-block;
    cursor: pointer;
    width:30%;
    color:#fff;
    }

    button:hover, .button:hover {
    background:#19a08c;
    }

    label.error {
        font-family:'Source Sans Pro',arial,sans-serif;
        font-size:1em;
        display:block;
        padding-top:10px;
        padding-bottom:10px;
        background-color:#d89c9c;
        width: 80%;
        margin:auto;
        color: #FAFAFA;
        -webkit-border-radius:6px;
        -moz-border-radius:6px;
        border-radius:6px;
    }

    /* media queries */
    @media (max-width: 700px) {
        label.error {
            width: 90%;
        }
        input, textarea {
            width: 90%;
        }
        button {
            width:90%;
        }
        body {
        }  
        .message {
            font-family:'Source Sans Pro',arial,sans-serif;
            font-size:1.1em;
            display:none;
            padding-top:10px;
            padding-bottom:10px;
            background-color:#2ABCA7;
            width: 80%;
            margin:auto;
            color: #FAFAFA;
            -webkit-border-radius:6px;
            -moz-border-radius:6px;
            border-radius:6px;
        }
    }

        body {
            padding: 0;
            margin: 0;
        }
        header {
            width: 100%;
            height: 50px;
            background: #F5F5F5;
        }

        .global-nav {
            display: none;
        }

        h1 {
            font-size: 35px;
            text-align: center;
        }

        .nowtitle {
            display: none;
        }

        .title {
            font-size: 25px;
            position: relative;
            top: 50px;
        }

        #nav-drawer {
            position: relative;
        }

        /*チェックボックス等は非表示に*/
        .nav-unshown {
        display:none;
        }

        /*アイコンのスペース*/
        #nav-open {
        display: inline-block;
        width: 30px;
        height: 22px;
        vertical-align: middle;
        }

        /*ハンバーガーの形をCSSで表現*/
        #nav-open span, #nav-open span:before, #nav-open span:after {
        position: absolute;
        height: 3px;/*線の太さ*/
        width: 25px;/*長さ*/
        border-radius: 3px;
        background: #555;
        display: block;
        content: '';
        cursor: pointer;
        }
        #nav-open span:before {
        bottom: -8px;
        }
        #nav-open span:after {
        bottom: -16px;
        }

        /*閉じる用の薄黒箇所*/
        #nav-close {
        display: none;
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: black;
        opacity: 0;
        transition: .3s ease-in-out;
        }

        /*メニューの中身*/
        #nav-content {
        overflow: auto;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        width: 90%;
        max-width: 330px;/*最大幅（お好みで調整を）*/
        height: 100%;
        background: #fff;
        transition: .3s ease-in-out;
        -webkit-transform: translateX(-105%);
        transform: translateX(-105%);
        }

        /*チェックがついたら表示させる*/
        #nav-input:checked ~ #nav-close {
        display: block;
        opacity: .5;
        }

        #nav-input:checked ~ #nav-content {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
        box-shadow: 6px 0 25px rgba(0,0,0,.15);
        }

        .header-logo-menu{
        display: flex;
        display: -moz-flex;
        display: -o-flex;
        display: -webkit-flex;
        display: -ms-flex;
        flex-direction: row;
        -moz-flex-direction: row;
        -o-flex-direction: row;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        }

        /*ロゴやサイトタイトルをセンタリング*/
        .logo-area{
            text-align:center;
            margin:auto;
            font-size:  25px;
        }

        ul {
            list-style: none;
        }

        .box {
            display: none;
        }

        .humline {
            width: 100%;
            height: 1px;
            margin-top: 40px;
            margin-bottom: 40px;
            background: rgb(206, 198, 198);
        }
</style>

</head>



<body>
<div class="box"></div>
<header>
    <h1 class="nowtitle">筋トレ </h1>
    <div class="header-logo-menu">
    <div id="nav-drawer" class="mt-3 ml-3">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
            <ul>
                <li class="mt-4"><a href="calendar.php">筋トレ</a></li>
                <div class="humline"></div>
                <li><a href="stopwatch.html">ストップウォッチ</a></li>
                <div class="humline"></div>
                <li><a href="logout.php">ログアウト</a></li>
                <div class="humline"></div> 
            </ul>
        </div>
    </div>
    <div class="logo-area">筋トレ</div>
    </div>
</header>

<div id="wrapper">

<p style="text-align: center;"><span class="datetext"><?php echo $_smarty_tpl->tpl_vars['datetext']->value;?>
</span> が選択されています。</p>

<table class="table table-hover mt-5">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col">メニュー</th>
        <th scope="col">回数</th>
        <th scope="col">セット数</th> 
        <th></th>
        </tr>
     </thead>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <tbody>
            <tr>
                <td></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['menu'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['setnum'];?>
</td>
                <td><a href="menu_delete.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" class="complate" name="delete">完了</td>
            </tr>
        </tbody>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<form  action="insert.php" id="contact" method="post">
    <div class="container mt-5">
        <div class="head">
        <h2>メニューを追加しましょう！</h2>
        </div>
        <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"></input>
        <input type="text" name="menu" placeholder="トレーニングメニュー" required/><br />
        <input type="number" name="num" placeholder="回数or秒数" required/>
        <input  type="number" name="setnum" placeholder="セット数" required/><br/>
        
        <button id="submit" name="insert" type="submit">追加</button>
    </div>
</form>

<?php echo '<script'; ?>
>
$(function(){
  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    return false;
  });
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
