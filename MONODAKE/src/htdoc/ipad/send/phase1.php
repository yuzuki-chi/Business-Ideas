<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONODAKE</title>
    <link rel="stylesheet" href="../css/ress.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="sidemenu">
            <h3>荷物を送る</h3>
            <ul>
                <li class="valid">1. QR読み込み</li>
                <li>2. 荷物を入れる</li>
                <li>3. 確認</li>
            </ul>
            <p>発送！</p>
        </div>
        <div class="mainmenu">
            <p>QRコードがある場合、かざしてください</p>
            <!-- <div class="camera_stage">カメラ画面</div> -->

            <video class="camera_stage" id="camera"></video>
            <!-- <canvas id="picture"></canvas> -->
            <form>
                <button type="button" id="shutter">シャッター</button>
            </form>

            <p><a href="./phase2.php">（次へ）</a></p>
            <p>QRコードがない場合</p>
        </div>
    </div>

    <footer>
        <h1><img src="../images/logo_w.png" alt="MONODAKE" class="logo_img"></h1>
    </footer>
    <script src="../js/main.js"></script>
</body>
</html>