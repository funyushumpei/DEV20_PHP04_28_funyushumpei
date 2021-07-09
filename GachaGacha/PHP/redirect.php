<?php
if(
    !isset($_POST["pageflag"]) || $_POST["pageflag"]==""
){
    //最初にinsert.phpにアクセスしたときindex.phpに移動する
    header("location: index.php");
}

//1.POSTデータ取得
$pageflag = $_POST["pageflag"];

if($pageflag=="login"){
    header("location: login.php");
}else if($pageflag=="gachagacha"){
    header("location: gachagacha.php");
}else if($pageflag=="collection"){
    header("location: collection.php");
}else if($pageflag=="setting"){
    header("location: setting.php");
}else if($pageflag=="home"){
    header("location: home.php");
}else if($pageflag=="gacha_random"){
    header("location: gacha_random.php");
}else if($pageflag=="logout"){
    header("location: logout.php");
}else if($pageflag=="user_info"){
    header("location: user_info.php");
}
?>