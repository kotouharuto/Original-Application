<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">

<!-- <style>
    body {
    padding-top:25px;
    background-color:gray;
    margin-left:10px;
    margin-right:10px;
    background: white;
    padding: 0;
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
    input:first-of-type
    {
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

    @media (min-width:1131px) {
        nav {
            position: fixed;
            width: 100%;
            top: 50px;
            z-index: 10000;
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
            /* bottom: 0; */
            background: #F5F5F5;
        }

        .nav-item a span {
            display: block;
            font-size: 15px;
            color: black;
            opacity: 1 !important;
        }

        h1 {
            font-size: 35px;
            text-align: center;
        }

        .title {
            font-size: 27px;
            position: relative;
            bottom: 30px;
        }

        .nowtitle {
            font-size: 0px;
        }
    }
</style> -->

</head>
<body>
<?php
// ⚪️現在の課題点
// メニューを追加したら、フォームの下に追加したメニューが表示されてしまう

require_once "/Applications/MAMP/bin/php/php7.4.2/lib/php/Smarty/smarty/Smarty.class.php";

$smarty = new Smarty();

$smarty->cache_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/cache";
$smarty->config_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/config";
$smarty->template_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/template";
$smarty->conpile_dir = "/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/conpile";

$smarty->display('/Applications/MAMP/htdocs/Original-Application/scr-image/Smarty_html/templates/menupost.tpl');

?>

    <?php
    require_once "dbconnect.php";
    $pdo = db_connect();
    
    //データ取得
    $sql = "SELECT * FROM trainingmenu WHERE 1";
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    ?>
    <table class="table table-hover mt-5">

    <?php

     //データ表示処理
    

    //削除処理
    function DELETE() {
        $pdo = db_connect();
        if(isset($_GET['action']) && $_GET['action'] == 'delete' && $_GET['id'] > 0) {
            try {
                $pdo->beginTransaction();
                $id = $_GET['id'];
                $sql = "DELETE FROM trainingmenu WHERE id = :id";
                $stmh = $pdo->prepare($sql);
                $stmh->bindValue(':id', $id, PDO::PARAM_INT);
                $stmh->execute();
                $pdo->commit();
            } catch(PDOException $Exception) {
                $pdo->rollBack();
                print 'エラー：'. $Exception->getMessage();
                
            }
        }
        return $pdo;
    }
    DELETE();
    ?>
    </table>
    

    
    

</body>
</html>

<?php
require_once "dbconnect.php";
?>