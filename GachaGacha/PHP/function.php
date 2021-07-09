<?php

//ログイン認証
function loginCheck(){
    if (!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()) {
        echo "LOGIN Error!";
        exit();
    } else {
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }
}

//DB接続
function connectDB(){
    try {
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
    } catch (PDOException $e) {
        exit('DbConnectError:' . $e->getMessage());
    }
    return $pdo;
}

?>