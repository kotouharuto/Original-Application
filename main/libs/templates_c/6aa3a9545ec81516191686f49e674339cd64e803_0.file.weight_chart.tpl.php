<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-13 09:44:17
  from '/Applications/MAMP/htdocs/Original-Application/main/libs/templates/weight_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd5e271d66c95_35109795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa3a9545ec81516191686f49e674339cd64e803' => 
    array (
      0 => '/Applications/MAMP/htdocs/Original-Application/main/libs/templates/weight_chart.tpl',
      1 => 1607852539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd5e271d66c95_35109795 (Smarty_Internal_Template $_smarty_tpl) {
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

    <canvas id="myChart" width="400" height="400"></canvas>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo '<?php ';?>
echo $name <?php echo '?>';?>
],//各棒の名前（name)
            // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'ほげ'],//各棒の名前（name)
            datasets: [{
                label: '# of Votes',
                data: [<?php echo '<?php ';?>
echo $price <?php echo '?>';?>
],//各縦棒の高さ(値段)
                // data: [12, 19, 3, 5, 2, 20],//各縦棒の高さ(値段)
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</body>
</html><?php }
}
