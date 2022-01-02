<!DOCTYPE html>
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
                宛先の住所を選択してください。
            </p>
        </div>
        <div class="select_box">
            <ul>
                <?php 
                for ($i=1; $i <= 10; $i++) { 
                ?>
                    <a href='./phase2.php?aid=<?=$i?>'>
                        <li>
                            <div>住所<?=$i?></div>
                            <div>東京都八王子市片倉町666-6</div>
                            <div>立石 凌 様</div>
                        </li>
                    </a>
                <?php
                }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>