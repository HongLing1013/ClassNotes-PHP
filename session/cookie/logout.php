<?php
if(isset($_COOKIE['login'])){
    setcookie("login","",time()-1);//時間是控制登出的關鍵
}
header("location:index.php");
?>