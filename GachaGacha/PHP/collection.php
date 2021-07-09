<?php
session_start();
include('function.php');
loginCheck();

//1.DB接続
$pdo = connectDB();

//2.データ登録SQL作成
$table_name = 'collection_'.$_SESSION['user_name'].'_table';
$stmt = $pdo->prepare("SELECT * FROM $table_name ORDER BY id ASC");
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
       $view .= '　';
       $view .= '<a href="delete.php?id='.$result["id"];
       $view .= '"';
       $view .= ' onclick=';
       $view .= '"'.'return confirm('."'削除してもいいですか？'".')'.'">';
       $view .= '[削除]';
       $view .= '</a>';
       $view .= '<img src="../IMG/character/'.$result["character_img"].'">';
       $view .= "</p>";
    }
}
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
    <div class="container jumbotron"><?=$view?></div>
</body>
</html>