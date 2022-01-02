<?php
if(empty($_GET['rid'])) header('Location: ./phase1.php');
$rid = $_GET['rid'];
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONODAKE</title>
    <link rel="stylesheet" href="../css/ress.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/receive.css">
    
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
        <h2>荷物を受け取る</h2>
        <div class="context">
            <p>受け取り場所の確認をしてください</p>
        </div>
        <div>
            <div>
                <img src="../images/map.png" alt="map" style="width: 100%;">
            </div>
            <div>
                <p>ローソン西八王子店</p>
                <p>お取り扱い時間：24時間営業</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 10vh;">
            <a href='./done.php?rid=<?=$rid?>'>
                <p>到着しました</p>
            </a>
        </div>
    </main>
</body>
</html>