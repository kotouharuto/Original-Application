{* Smarty_html/calendar.tpl *}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <style>
    .date_btn {
        width: ;
        height: 100px;
        background: gray;
        display: table-cell;
        vertical-align: middle;
    }

    a {
        
    }
    </style>
</head>
<body>
{foreach $dates as $date}
<div class="date_btn">
    <a href="menupost.php?date={$date->format('Ymd')}">{$date->format('Y/m/d')}</a>
</div><br>
    
    
{/foreach}
</body>
</html>