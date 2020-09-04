<?php
$date_time = new DateTime('first day of this month');
// 翌月の1日
$next_month = (clone $date_time)->modify('+ 1 month');
$dates = [];
while($date_time < $next_month) {
    $dates[] = clone $date_time;
    $date_time->modify('+ 1 day');
}
foreach ($dates as $date) {
    echo $date->format('Y-m-d'), '<br>';
}