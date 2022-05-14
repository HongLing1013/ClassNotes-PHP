<?php

// 預設可以比對的帳號密碼
$default_user='hollie';
$default_pw='1234';

// 接收上一個頁面的資料
$acc=$_POST['acc'];
$pw=$_POST['pw'];

if($acc==$default_user && $pw==$default_pw){
    echo "帳號密碼正確";
    echo "歡迎光臨";
}else{
    echo "帳號密碼錯誤，請回登入頁重新輸入";
    echo "<a href='login.php'>回登入頁</a>";
}

?>