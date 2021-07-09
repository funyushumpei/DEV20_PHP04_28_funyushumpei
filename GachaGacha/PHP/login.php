<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>GachaGacha</title>
</head>
<body>
    <form action="login_act.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ログイン</legend>
                <label>ID: <input type="text" name="login_id"></label><br>
                <label>PW: <input type="text" name="login_pw"></label><br>
                <input type="submit" value="ログイン">
            </fieldset>
        </div>
    </form>

    <form action="user_add.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>新規ユーザー登録</legend>
                <label>ユーザー名: <input type="text" name="user_name"></label><br>
                <label>ID: <input type="text" name="user_id"></label><br>
                <label>PW: <input type="text" name="user_pw"></label><br>
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>
</body>
</html>