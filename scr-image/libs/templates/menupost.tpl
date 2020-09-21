{* Smarty_html/menupost.tpl *}

{* メニュー表示画面ファイル *}

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
    max-width:600px;
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




    /* スマホ、タブレット */
    @media (max-width:1130px) {
        body {
            height: 1500px;
            background: white;
        }
        .title {
            text-align: center;
            letter-spacing: 3px;
        }

        .box {
            width: 60px;
            height: 60px;
            background: white;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            height: 50px;
            background: #F5F5F5;
        }

        h1 {
            font-weight: bold;
            width: 10000px;
            height: 100px;
            text-align: center;
            letter-spacing: 1px;
            /* position: relative;
            display: inline-block;
            margin-bottom: 1em; */
        }
        
        .todo {
            display: flex;
            color: #2d8fdd;
            border-left: solid 6px #2d8fdd;/*左側の線*/
            background: #f1f8ff;/*背景色*/
            margin-bottom: 3px;/*下のバーとの余白*/
            line-height: 1.5;
            padding: 0.5em;
            list-style-type: none!important;/*ポチ消す*/
            width: 90%;
            margin: 0 auto;
        }
        .traning {
            margin: 0 auto;
        }

        main {
            flex: 1;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

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
        }

        .nav-item a span {
            display: block;
            font-size: 15px;
            color: black;
            opacity: 1 !important;
        }

        .footer {
            margin-bottom: 24px;
        }

        header {
            display: flex;
        }

        .nowtitle {
            font-size: 30px;
            font-weight: normal;
            margin: 0 auto;
            font-family: ;
        }

        .addurl {
            text-align: center;
        }

        .header-logo-menu {
            display:none;
        }
    }



    /* PC */
    @media (min-width:1131px) {
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
            background: black;
        }

    }
</style>

</head>



<body>
<div class="box"></div>
<header>
    <h1 class="nowtitle">筋トレ</h1>
    <div class="header-logo-menu">
    <div id="nav-drawer" class="mt-3 ml-3">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
            <ul>
                <li><a href="">ホーム</a></li>
                <div class="humline"></div>
                <li><a href="#">筋トレ</a></li>
                <div class="humline"></div>
                <li><a href="#">タイマー</a></li>
                <div class="humline"></div>
                
            </ul>
        </div>
    </div>
    <div class="logo-area">筋トレ</div>
    </div>
</header>

<div id="wrapper">

<p style="text-align: center;"><span class="datetext">{$datetext}</span> が選択されています。</p>

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

{foreach  from=$menus item=$row}
        <tbody>
            <tr>
                <td></td>
                <td>{$row.menu}</td>
                <td>{$row.num}</td>
                <td>{$row.setnum}</td>
                <td><a href="menu_delete.php?action=delete&id={$row.id}&date={$date}" class="complate" name="delete">完了</td>
            </tr>
        </tbody>
{/foreach}
</table>

<form  action="insert.php" id="contact" method="post">
    <div class="container">
        <div class="head">
        <h2>メニューを追加しましょう！</h2>
        </div>
        <input type="hidden" name="date" value="{$date}"></input>
        <input type="text" name="menu" placeholder="トレーニングメニュー" required/><br />
        <input type="number" name="num" placeholder="回数or秒数" required/>
        <input  type="number" name="setnum" placeholder="セット数" required/><br/>
        
        <button id="submit" name="insert" type="submit">追加</button>
    </div>
</form>

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


<script>
$(function(){
  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    return false;
  });
});
</script>
</body>
</html>