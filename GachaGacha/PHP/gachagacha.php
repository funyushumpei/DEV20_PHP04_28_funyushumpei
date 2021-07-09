<?php
session_start();
include('function.php');
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GachaGacha</title>
</head>
<body>
    <form action="home.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ホーム</legend>
                <input type="submit" value="ホーム">
            </fieldset>
        </div>
    </form>

    <form action="gacha_random.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ランダムガチャ</legend>
                <input type="submit" value="まわす">
            </fieldset>
        </div>
    </form>
</body>
</html>