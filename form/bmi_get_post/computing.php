<!-- 運算頁 -->
<?php 
echo "POST陣列的內容：";
print_r($_POST);
echo "<br>";
echo "GET陣列的內容：";
print_r($_GET);
echo "<br>";

// empty可以判斷陣列內容是否為空值
if(empty($_GET)){//判斷$_GET是否為空,如果為空表示為POST的方式傳送
    $height=$_POST['height'];
    $weight=$_POST['weight'];
}else{
    $height=$_GET['height'];
    $weight=$_GET['weight'];
};


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

header("location:result.php?bmi=$bmi&result=$result");

?>