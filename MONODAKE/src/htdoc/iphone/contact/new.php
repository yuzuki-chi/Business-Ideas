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
            <form action="./submit.php" method="post">
                <div class="contact_box">
                    <div>
                        <p>氏名</p>
                        <input type="text" name="c_name" id="c_name">
                    </div>
                    <div>
                        <p>郵便番号</p>
                        <input type="text" name="c_zip" id="c_zip">
                    </div>
                    <div>
                        <p>都道府県</p>
                        <input type="text" name="c_city" id="c_city">
                    </div>
                    <div>
                        <p>市区郡町村</p>
                        <input type="text" name="c_town" id="c_town">
                    </div>
                    <div>
                        <p>番地・マンション名</p>
                        <input type="text" name="c_snum" id="c_snum">
                    </div>
                </div>
                <div>
                    <input type="submit" value="新規作成">
                </div>
            </form>
        </div>
    </main>
</body>
</html>