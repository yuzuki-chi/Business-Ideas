<?php
if(empty($_GET['aid'])) header('Location: ./phase1.php');
$aid = $_GET['aid'];

if(empty($_GET['sd'])) header('Location: ./phase2.php');
$sd = $_GET['sd'];
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
            <p>
            あなたの住所 <br> 宛先の住所でお間違いがなければ <br> 『次へ』をタップしてください
            </p>
        </div>
        <div class="check_list">
            <h3>宛先の住所</h3>
            <ul>
                <li>〒192-0823</li>
                <li>東京都八王子市片倉町666-6</li>
                <li>立石 凌 様</li>
            </ul>
        </div>
        <div class="check_list">
            <h3>あなたの住所</h3>
            <ul>
                <li>〒192-0823</li>
                <li>東京都八王子市片倉町666-6</li>
                <li>立石 凌 様</li>
            </ul>
        </div>
        <div class="check_list">
            <h3>お届け日</h3>
            <ul>
                <li>2021年11月28日（日)</li>
            </ul>
        </div>
        <div>
            <a href='./done.php?aid=<?=$aid?>&sd=<?=$sd?>'>
                <button class="next_btn">次へ</button>
            </a>
        </div>
    </main>
</body>
</html>