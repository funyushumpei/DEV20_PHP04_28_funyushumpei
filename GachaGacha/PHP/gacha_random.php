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
                <legend>もう一度</legend>
                <input type="submit" value="もう一度">
            </fieldset>
        </div>
    </form>
</body>
</html>

<?php
session_start();
include('function.php');
loginCheck();

//1.DB接続
$pdo = connectDB();

//2.データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_gachagacha_table ORDER BY RAND() LIMIT 1");
$status = $stmt->execute();

//3.データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
       $view .= "<p>";
       $view .= '<a>';
       $view .= $result["character_id"].":".$result["character_name"];
       $view .= '</a>';
       $view .= "</p>";
       $view .= '<img src="../IMG/character/'.$result["character_img"].'">';

       $id = $result["id"];
    }
}
$table_name = 'collection_'.$_SESSION['user_name'].'_table';
$stmt = $pdo->prepare("INSERT IGNORE INTO $table_name SELECT * FROM gs_gachagacha_table WHERE id = '".$id."'");
$status = $stmt->execute();
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ表示</title>
</head>
<body>
    <div>
    <div class="container jumbotron"><?=$view?></div>
    </div>
</body>
</html>