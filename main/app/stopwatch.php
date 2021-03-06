<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    @font-face {
      font-family: 'DSEG';
      src: url('./DSEG7-Classic/DSEG7Classic-Regular.ttf');
    }

    body {
      display: inline;
    }

    .greetbox {
        background: navy;
        width: 100%;
        height: 50px;
        margin-bottom: 30px;
        text-align: center;
        padding-top: 13px;
        color: white;
        font-weight: bold;
        font-size: 17px;
    }

    #time {
      font-family: 'arial black';
      font-size: 50px;
      text-align: center;
      margin: 0 auto;
    }

    .main {
        display: table-cell; /* インライン要素にすることで横に回り込む */
        vertical-align: middle; /* 上下中央に寄せる */ 
    }

    .logo-area{
      text-align:center;
      margin:auto;
      font-size:  25px;
      /* background: #F5F5F5; */
      width: 100%;
      height: 50px;
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

        .timer {
          display: inline;
          width: 250px;
          text-align:center;
          margin: 0 auto;
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
            top: 40px;
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
            background: white;
        }

        ul {
            list-style: none;
        }

        .box {
            display: none;
        }

        .humline1 {
            width: 100%;
            height: 1px;
            margin-top: 40px;
            margin-bottom: 40px;
            background: rgb(206, 198, 198);
        }

        .under-line {
          width: 100%;
          height: 2px;
          background: #dcdcdc;
        }




</style>
</head>
<body>
<header>
  <h1 class="nowtitle">ストップウォッチ</h1>
    <div class="header-logo-menu">
    <div id="nav-drawer" class="mt-3 ml-3">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
        <div class="greetbox">こんにちは、<?php echo $_SESSION['USERNAME']; ?>さん</div>
            <ul>
                <li class="mt-4"><a href="calendar.php">筋トレ</a></li>
                <div class="humline1"></div>
                <li class="mt-4"><a href="weight_chart.php">体重管理</a></li>
                <div class="humline1"></div>
                <li><a href="stopwatch.php">ストップウォッチ</a></li>
                <div class="humline1"></div>
                <li><a href="logout.php">ログアウト</a></li>
                <div class="humline1"></div> 
            </ul>
        </div>
    </div>
    <div class="logo-area">ストップウォッチ</div>
    </div>
</header>
<div class="under-line"></div>

<div class="timer">
  <div id="time">00:00:00.000</div>
    <div style="font-family: Impact;">
      <input id="start" type="button" value="start" class="btn btn-outline-dark">
      <input id="stop" type="button" value="stop" class="btn btn-outline-dark">
       <input id="reset" type="button" value="reset" class="btn btn-outline-dark">
    </div>
</div>

  <script>
    const timeElement = document.getElementById('time');
    const start = document.getElementById('start');
    const stop = document.getElementById('stop');
    const reset = document.getElementById('reset');

    // 経過時間のミリ秒
    let elapsed = 0;

    let intervalId = null;

    function updateTime() {
      const ms = elapsed % 1000;
      const s = Math.floor(elapsed / 1000) % 60;
      const m = Math.floor(elapsed / (1000*60)) % 60;
      const h = Math.floor(elapsed / (1000*60*60));

      const msStr = ms.toString().padStart(3, '0');
      const sStr = s.toString().padStart(2, '0');
      const mStr = m.toString().padStart(2, '0');
      const hStr = h.toString().padStart(2, '0');

      timeElement.innerHTML = `${hStr}:${mStr}:${sStr}.${msStr}`;
    }

    start.addEventListener('click', function(e) {
      if (intervalId !== null) { return; }
      let pre = new Date();
      intervalId = setInterval(function() {
        const now = new Date();
        elapsed += now - pre;
        pre = now;
        updateTime();
      }, 10);
    });

    stop.addEventListener('click', function(e) {
      clearInterval(intervalId);
      intervalId = null;
    });

    reset.addEventListener('click', function(e) {
      elapsed = 0;
      updateTime();
    });
  </script>
</body>
</html>