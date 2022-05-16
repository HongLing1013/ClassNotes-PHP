<h1>cookie購物車</h1>
<?php
//cookie放中文會在內容顯示亂碼
setcookie('產品',serialize(['CPU'=>2,"RAM"=>4,"螢幕"=>5,"鍵盤"=>10]),time()+3600);

$cart=unserialize($_COOKIE ["產品"]);
foreach($cart as $prod => $qt){
    echo $prod."->".$qt."<br>";
}
// 需重整兩次才會讀出內容
?>