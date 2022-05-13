<!-- 這是專門用來做運算的網頁 -->
<!-- 將頁面導向結果專門的結果頁面 -->
<?php 

$height=$_GET['height'];
$weight=$_GET['weight'];

$bmi=round($weight/(($height/100)*($height/100)),1);

// 導向頁面 header裡面需用雙引號包起來
// get的話要+ ?
// 意思是不管我的結果是什麼都放在這個變數裡面傳出去
header("location:result.php?bmi=$bmi");
?>