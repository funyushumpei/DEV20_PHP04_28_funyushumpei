<?php

session_start();
include('function.php');
loginCheck();

//1.GETでidを取得
$id = $_SESSION['id'];

//2.DB接続
$pdo = connectDB();

//3.SELECT
$sql = "SELECT * FROM gs_user_table WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

//4.データの表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit('ErrorQuery:'.$error[2]);
}else{
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ編集</title>
</head>
<body>
<form action="user_update.php" method="post">
        <div class="jumbotron">
            <fieldset>
            <legend>ユーザー情報</legend>
                <label>ユーザー名: <input type="text" name="user_name" value="<?=$row["user_name"]?>"></label><br>
                <label>ID: <input type="text" name="user_id" value="<?=$row["user_id"]?>"></label><br>
                <label>PW: <input type="text" name="user_pw" value="<?=$row["user_pw"]?>"></label><br>
                <input type="hidden" name="id" value="<?=$row["id"]?>">
                <input type="submit" value="保存">
            </fieldset>
        </div>
    </form>
</body>
</html>