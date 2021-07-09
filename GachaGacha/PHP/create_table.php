<?php

session_start();
include('function.php');

//DB接続
$pdo = connectDB();

//SQL作成
$table_name = 'collection_'.$_SESSION['user_name'].'_table';
$sql = 'CREATE TABLE '.$table_name.'(
    id int(12) PRIMARY KEY AUTO_INCREMENT,
    character_id int(12),
    character_name varchar(128),
    character_img varchar(128),
    indate datetime
)';

//SQL実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//SQL実行後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: login.php");
    exit();
}














?>