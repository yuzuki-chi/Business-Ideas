<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONODAKE</title>
    <link rel="stylesheet" href="../css/ress.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
    
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
        <h2>連絡先</h2>
        <div class="context">
            <div class="select_box">
                <ul>
                    <a href="./new.php">
                        <li>新規作成</li>
                    </a>
                    <?php
                    for ($i=1; $i <= 10; $i+=1) { 
                    ?>
                    <a href='./edit.php?cid=<?php $i ?>'>
                        <li>
                            <p>連絡先<?=$i?></p>
                            <p>〒193-0823</p>
                            <p>東京都八王子市片倉町666-6</p>
                            <p>立石 凌 様</p>
                        </li>
                    </a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>