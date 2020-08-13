<?php
// カレンダーを表示する年を指定する
$year = 2020;

// 年始のタイムスタンプを取得
$timestamp = strtotime("{$year}-01-01 00:00:00");
$weekday = 0;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>カレンダー</title>
<style>
main {
	display: flex;
	flex-wrap: wrap;
}

.yearcount {
    text-align: left;
    font-size: 15px; 
}

.titleday {
    font-size: 25px;
    text-align: center;
}

table {
	text-align: center;
	margin-bottom: 20px;
	border: 1px solid #555;
	margin: 0 auto;
	margin-bottom: 15px;
}

table caption {
	padding: 7px 0;
	font-size: 86%;
	color: black;
	line-height: 1.0em;
	background: white;
	border: 1px solid black;
}
table th,
table td {
	margin-right: 5px;
	padding: 0 5px;
	font-size: 86%;
	color: #222;
	text-align: center;
	letter-spacing: 5px;
}
table td {
	text-align: right;
}

h1 {
	text-align: center;
}

</style>
</head>
<body>
    <p class="titleday">日にちを選択してください</p>
	<h2 class="yearcount"><?php echo $year .'年'; ?></h2>
<main>
	<?php for( $i=1; $i<=12; $i++): ?>
	<table class="calender">
		<caption><?php echo $i; ?>月</caption>
		<thead>
			<tr>
				<th>日</th><th>月</th><th>火</th><th>水</th>
				<th>木</th><th>金</th><th>土</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// 開始日を取得
			$start_day_timestamp = mktime(0,0,0,$i,1,$year);
		
			// 末日を取得
			$end_day_timestamp = mktime(0,0,0,($i+1),0,$year);
			$end_day = date("d", $end_day_timestamp);
	
			//現在の月を取得
			$nowmonth = date("n");

			//現在の日にちを取得
			$nowday = date("j");

			//1日から月末までを表示する処理
			for( $j=1; $j <= $end_day; $j++ ) {
				if( $j === 1 ) {
		
					echo '<tr>';
		
					$weekday = date("w", $start_day_timestamp);
					
					for( $k=0; $k<$weekday; $k++) {
						echo '<td></td>';
					} 
				}

				switch($weekday) {
				case 0:
					$style = 'color: red;';
				break;
				case 6:
					$style = 'color: blue;';
				break;
				default;
				$style = 'color: #222;';
				}
			
				if($i == $nowday) {

				}

				if($i == $nowmonth) {
				}
				
				if($j == $nowday and $i == $nowmonth) {
					$style = $style. "; background:red ";
					$style = $style. "; color:white ";
					$style = $style. "; width:30px ";
					$style = $style. "; height:40px ";
					$style = $style. "; border-radius:50% ";
				}

				echo '<td style="'.$style.'">'.$j.'</td>';

				$weekday++;
		
				if( 6 < $weekday ) {
					echo '</tr><tr>';
					$weekday = 0;
				}

				
			}
			$style = 'background: red; width: 20px; height: 30px; border-radius: 50%;';
			$stylec = 'background: black;';
			?>
		</tbody>
	</table>
	<?php endfor; ?>
</main>
</body>
</html>