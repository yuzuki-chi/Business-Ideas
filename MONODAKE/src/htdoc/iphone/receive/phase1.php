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
        <h2>荷物を受け取る</h2>
        <div class="context">
            <p>到着している荷物</p>
        <div class="select_box">
            <ul>
                <?php
                for ($i=1; $i <= 2; $i++) { 
                ?>
                <a href='./phase2.php?rid=<?=$i?>'>
                    <li>荷物<?=$i?></li>
                </a>
                <?php
                }
                ?>
            </ul>
        </div>
        <div>
            <p>荷物が表示されない場合</p>
        </div>
    </main>
</body>
</html>