<?php

session_start();
include('function.php');

$login_id = $_POST["login_id"];
$login_pw = $_POST["login_pw"];


//1.DB接続
$pdo = connectDB();

//2.SQL作成
$sql = "SELECT * FROM gs_user_table WhERE user_id=:login_id AND user_pw=:login_pw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':login_id',$login_id,PDO::PARAM_STR);
$stmt->bindValue(':login_pw',$login_pw,PDO::PARAM_STR);
$status = $stmt->execute();

//3.データ更新処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}

$val = $stmt->fetch();

if($val["id"]!=""){
    $_SESSION["id"] = $val['id'];
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["user_name"] = $val['user_name'];

    header("Location: home.php");
    exit();
}else{
    header("Location: login.php");
    exit();
}

?>