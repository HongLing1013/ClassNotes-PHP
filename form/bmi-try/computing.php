<!-- 這是專門用來做運算的網頁 -->
<!-- 將頁面導向結果專門的結果頁面 -->
<?php 

$height=$_GET['height'];
$weight=$_GET['weight'];

$bmi=round($weight/(($height/100)*($height/100)),1);

// 請根據BMI值,在運算頁上計算出中文的BMI結果或建議,show在結果頁上
$result='';

if($bmi>=35){
    $result= "重度肥胖";
}else if($bmi>=30&&$bmi<35){
    $result= "中度肥胖";
}else if($bmi>=27&&$bmi<30){
    $result= "輕度肥胖";
}else if($bmi>=24&&$bmi<27){
    $result= "過重";
}else if($bmi>=18.5&&$bmi<24){
    $result= "健康";
}else if($bmi<18.5){
    $result= "過輕";
}

// 導向頁面 header裡面需用雙引號包起來
// get的話要+ ?
// 意思是不管我的結果是什麼都放在這個變數裡面傳出去
header("location:result.php?bmi=$bmi&result=$result");


?>