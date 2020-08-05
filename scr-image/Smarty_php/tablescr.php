<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
</head>

<style>
    @media (min-width: 300px) and (max-width:1130px) {
    body {
        height: 1500px;
        background: white;
    }
    .title {
        text-align: center;
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
        background: #F8F8FF;
    }

    h1 {
        font-weight: bold;
        width: 10000px;
        text-align: center;
        /* position: relative;
        display: inline-block;
        margin-bottom: 1em; */
    }
    
    /* h1:before {
        content: '';
        position: absolute;
        bottom: -15px;
        display: inline-block;
        width: 60px;
        height: 5px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        background-color: black;
        border-radius: 2px;
    } */

    h2 {
        padding: 0.4em 0.5em;/*文字の上下 左右の余白*/
        color: #494949;/*文字色*/
        background: #f4f4f4;/*背景色*/
        border-left: solid 5px #7db4e6;/*左線*/
        border-bottom: solid 3px #d7d7d7;/*下線*/
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
            background: gray;
            opacity: 0.6;
        }

        .nav-item a span {
            display: block;
            font-size: 15px;
            color: white;
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
            margin: 0 auto;
        }

        .addurl {
            text-align: center;
        }
    }
</style>

<body>
    <div class="box"></div>
    <header>
        <h1 class="nowtitle">筋トレ</h1><hr>
    </header>

    <div id="wrapper">
        
    <h2 class="title mt-3">〇〇日の筋トレ</h1>   

    <?php
    require_once "dbconnect.php";
    
    //データ取得
    $sql = "SELECT * FROM trainingmenu WHERE 1";
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
    ?>
    <a href="menupost.php" class="addurl">メニューを追加しましょう！</a>

    <table class="table table-hover">
    <thead>
         <tr>
         <th scope="col">#</th>
         <th scope="col">メニュー</th>
         <th scope="col">回数</th>
         <th scope="col">セット数</th>
         <th></th>
         </tr>
     </thead>
     <?php

     //データ表示処理
    while(1) {
        $row = $stmh->fetch(PDO::FETCH_ASSOC);
        if($row == false) 
        {
            break;
        }
        ?>
        <tbody>
            <tr>
                <td></td>
                <td><?=htmlspecialchars($row['menu'], ENT_QUOTES)?></td>
                <td><?=htmlspecialchars($row['num'], ENT_QUOTES)?></td>
                <td><?=htmlspecialchars($row['setnum'], ENT_QUOTES)?></td>
                <td><a href="tablescr.php?action=delete&id=<?=htmlspecialchars($row['id'], ENT_QUOTES)?>" class="complate">完了</a></td>
            </tr>
        </tbody>
    <?php
    }

    //削除処理
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
    ?>
    </table>
    
    <!-- ナビ -->
    <nav class="global-nav">
        <div class="navline"></div>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#">
                    <i class="fas fa-home"></i>
                    <img src="homeimg.png" alt="" width="25%" height="20%">
                    <span>ホーム</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                  <i class="fas fa-star"></i>
                  <img src="danbelimg.png" alt="" width="25%" height="20%">
                  <span>筋トレ</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                  <i class="fas fa-history"></i>
                  <img src="timerimg.jpg" alt="" width="25%" height="20%">
                  <span>タイマー</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                  <i class="fas fa-cart-arrow-down"></i>
                  <img src="SNSimg2.png" alt="" width="25%" height="20%">
                  <span>SNS</span>
                </a>
            </li>
        </ul>
        </div>
    </nav>

</body>
</html>