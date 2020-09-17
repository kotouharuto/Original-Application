{* Smarty_html/calendar.tpl *}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<style>
    h2 {
        text-align: center;
        font-weight: bold;
    }

    div {
        text-align: center;
    }

    .date_btn {
        width: 200px;
        height: 50px;
        background-color:#49a9d4;
        border-radius: 5px;
        display: table-cell;
        vertical-align: middle;
        margin: 0 auto;
    }

    .date_btn a {
        text-decoration: none;
        color: black;
    }

    .datebox {
    }
    @media (max-width:1130px) {
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
    }
</style>
</head>
<body>
<h2>メニューを追加したい日にちを選択してください</h2>
{foreach $dates as $date}
<div class="date_btn">
    <a href="menupost.php?date={$date->format('Ymd')}">{$date->format('Y/m/d')}</a>
</div><br>
{/foreach}

    
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
                <a href="stopwatch.php">
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
</html>