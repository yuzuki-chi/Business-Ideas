<?php
if(empty($_GET['aid'])) header('Location: ./phase1.php');
$aid = $_GET['aid'];
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONODAKE</title>
    <link rel="stylesheet" href="../css/ress.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/send.css">
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <div class="title_sub">
            <h1>MONODAKE</h1>
            <h2>only one is needed</h2>
        </div>
        <div class="head_menu">≡</div>
    </header>

    <main>
        <h2>荷物を送る</h2>
        <div class="context">
            <p>お届け予定日を選択してください</p>
    </div>
    <div class="select_box date">
        <ul>
            <a href='./phase3.php?aid=<?=$aid?>&sd=0'>
                <li>指定なし</li>
            </a>
            <?php
            date_default_timezone_set('JTS');
            $today  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
            $one_day = 86400;   //1日のUNIX時間
            $week = array( "日", "月", "火", "水", "木", "金", "土" );  //日本語対応の曜日
            for ($i=0; $i < 7; $i++) { 
                $date = $today + ($one_day * $i);
            ?>
            <a href='./phase3.php?aid=<?=$aid?>&sd=<?=$date?>'>
                <li><?=date("Y-m-d", $date)?> (<?=$week[date("w", $date)]?>)</li>
            </a>
            <?php
            }
            ?>
        </ul>
    </div>
</body>
</html>