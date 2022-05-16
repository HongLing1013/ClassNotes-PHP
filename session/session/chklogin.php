<?php
// 預設可以比對的帳號密碼
$default_user='hollie';
$default_pw='1234';

// 接收上一個頁面的資料
$acc=$_POST['acc'];
$pw=$_POST['pw'];

// 給他一個狀態 暫時只給空字串
$error='';

// 判斷式
if($acc!=$default_user || $pw!=$default_pw){
    $error= "帳號密碼錯誤";
    // 帳號密碼錯誤的話 將頁面帶回前端頁面
    header("location:login.php?error=$error");
}else{
    session_start();
    $_SESSION['login']=$acc;
    header("location:memcenter.php?user=$acc");
}

?>