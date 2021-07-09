<?php
session_start();
include('function.php');

//0.入力チェック
if(
    !isset($_POST["user_name"]) || $_POST["user_name"]=="" ||
    !isset($_POST["user_id"]) || $_POST["user_id"]=="" ||
    !isset($_POST["user_pw"]) || $_POST["user_pw"]==""
){
    //最初にinsert.phpにアクセスしたときindex.phpに移動する
    //header("Location: index.php");
    exit('ParamError');
}

//1.POSTデータ取得
$user_name = $_POST["user_name"];
$_SESSION['user_name'] = $user_name;
$user_id = $_POST["user_id"];
$user_pw = $_POST["user_pw"];

//2.DB接続
$pdo = connectDB();

//3.データ登録SQL作成
$sql="INSERT INTO gs_user_table(id,user_name,user_id,user_pw,life_flag,datetime)
VALUES(NULL,:user_name,:user_id,:user_pw,0,sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_name',$user_name,PDO::PARAM_STR);
$stmt->bindValue(':user_id',$user_id,PDO::PARAM_STR);
$stmt->bindValue(':user_pw',$user_pw,PDO::PARAM_STR);

$flag=$stmt->execute();

//4.データ登録処理後
if($flag==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: create_table.php");
    exit;
}
