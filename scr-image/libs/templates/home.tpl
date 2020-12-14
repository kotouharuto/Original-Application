{* Smarty home.tpl *}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
    <style>
        body {
            margin: 0;
        }

        a {
        }

        a:link {
            text-decoration: none;
            color: black;
        }

        a:visited {
            color: black;
        }

        #damimg {
            width: 200px;
            height: 200px;
        }

        .tt {
            text-align: center;
            margin: 0;
        }

        .tt2 {
            font-size: 20px;
            text-align: center;
        }

        .logoutlink {
            position: absolute;
            bottom: 100px;
        }

        .linkbox {
            margin: 0 auto;
        }

        header {
            padding:10px;
            position: absolute;
            top: 0px;
        }

        @media (max-width: 700px) {

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

        .linkbox {
            height:100px;
            width: 50%;
            background: red;
            border-radius: 3px;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .linkbox2 {
            height:100px;
            width: 50%;
            background: blue;
            border-radius: 3px;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .linkbox3 {
            height:100px;
            width: 50%;
            background: gray;
            border-radius: 3px;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            
        }

        }
    </style>
</head>
<body>
<h1 class="tt">ホーム</h1>
<hr>
<h2 class="tt2">{$callname_text}</h2>

<div class="linkbox">
<a href="calendar.php">トレーニングメニューを追加しましょう!</a>
</div><br>
<div class="linkbox2">
<a href="stopwatch.php">タイマーを使って筋トレをしましょう!</a>
</div><br>
<div class="linkbox3">
<a href="logout.php">ログアウト</a>
</div>

<a href="logout.php" class="logoutlink">ログアウトする</a>

<nav class="global-nav">
        <!-- <div class="navline"></div> -->
        <ul class="nav-list">
            <li class="nav-item">
                <a href="home.php">
                    <i class="fas fa-home"></i>
                    <span>ホーム</span>
                </a>
            </li>
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
        </ul>
        </div>
    </nav>
</body>
</html>

