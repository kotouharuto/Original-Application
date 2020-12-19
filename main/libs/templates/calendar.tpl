{* Smarty_html/calendar.tpl *}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<style>
    header {
        width: 100%;
        height: 50px;
    }
    .global-nav {
            display: none;
        }

        .logo-area {
            font-size: 35px;
            text-align: center;
        }

    .nowtitle {
            display: none;
        }

        .title {
            font-size: 25px;
            position: relative;
            top: 40px;
        }

        #nav-drawer {
            position: relative;
            margin-top: 10px;
            margin-left: 10px;
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
        /* background: black; */
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
        background: white;
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

        .date_announce {
            text-align: center;
            color: red;
            font-weight: bold;
        }

        .date_btn {
            width: 70%;
            height: 100px;
            background: skyblue;
            border-radius: 10px;
            text-align: center;
            font-size: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin: 0 auto;
        }

        .date_btn a {
            color: black;
            font-weight: bold;
            text-align: center;
        }

        .margin-box {
            margin-top: 40px;
            margin-top: 40px;
        }

        .under-line {
            weight: 100%;
            height: 2px;
            background: #dcdcdc;
        }

    @media (max-width: 700px) {
        .under-line {
            weight: 100%;
            height: 2px;
            background: #dcdcdc;
        }

        header {
            width: 100%;
            height: 50px;
            background: white;
    }
    }
}
</style>
</head>
<body>
<header>
  <h1 class="nowtitle">カレンダー</h1>
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
    <div class="logo-area">カレンダー</div>
    </div>
</header>
<div class="under-line"></div>

<h2 class="date_announce">メニューを追加したい日にちを選択してください</h2>
{foreach $dates as $date}
<div class="margin-box"></div>
<div class="date_btn">
    <a href="menupost.php?date={$date->format('Ymd')}">{$date->format('Y/m/d')}</a>
</div><br>
<div class="margin-box"></div>
{/foreach}

</body>
</html>