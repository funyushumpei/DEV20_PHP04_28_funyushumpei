<?php
session_start();
include("function.php");
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>GachaGacha</title>
</head>
<body>
    <form action="gachagacha.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>ガチャガチャ</legend>
                <input type="submit" value="ガチャガチャ">
            </fieldset>
        </div>
    </form>

    <form action="collection.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>コレクション</legend>
                <input type="submit" value="コレクション">
            </fieldset>
        </div>
    </form>

    <form action="setting.php" method="post">
        <div class="jumbotron">
            <fieldset>
                <legend>設定</legend>
                <input type="submit" value="設定">
            </fieldset>
        </div>
    </form>
</body>
</html>