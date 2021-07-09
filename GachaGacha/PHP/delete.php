<?php
session_start();
include('function.php');
loginCheck();

//1.POSTデータ取得
$id = $_GET["id"];

//2.DB接続
$pdo = connectDB();

//3.DELETE
$sql = "DELETE FROM gs_collection_table WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

$status = $stmt->execute();

//データ更新処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: collection.php");
    exit();
}
?>