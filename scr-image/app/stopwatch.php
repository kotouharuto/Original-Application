<?php
//今日の課題：stopwatch.phpに遷移ができない
if(!isset($_SESSION['user_id'])) {
  // header("Location: login.php");
}
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

    #time {
      font-family: 'DSEG';
      font-size: 28px;
    }

    .main {
        display: table-cell; /* インライン要素にすることで横に回り込む */
        vertical-align: middle; /* 上下中央に寄せる */ 
    }
  </style>
</head>
<body>
    <div class="main">    
        <div id="time">00:00:00.000</div>
        <div>
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