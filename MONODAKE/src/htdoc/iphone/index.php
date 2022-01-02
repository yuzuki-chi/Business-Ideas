<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONODAKE</title>
    <link rel="stylesheet" href="./css/ress.css">
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="title">
        <h1>MONODAKE</h1>
        <h2>only one is needed</h2>
    </div>
    <div class="login_content">
        <form action="./login.php" method="post">
            <div class="input_form">
                <p>ユーザーネーム</p>
                <input type="text" name="user_id" id="user_id"><br/>
            </div>
            <div class="input_form">
                <p>パスワード</p>
                <input type="password" name="user_pw" id="user_pw"><br/>
            </div>
            <p style="color: red; text-align: center;">
                <?php
                if ( $_GET['s'] < 0 ) {
                    echo "ログインに失敗しました。<br/>";
                }
                ?>
            </p>
            <div class="submit_btn">
                <button class="btn_register">
                    <a href="./register.php">
                        新規登録
                    </a>
                </button>
                <button class="btn_login" type="submit">
                    ログイン
                </button>
            </div>
        </form>
    </div>
</body>
</html>