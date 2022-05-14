<!-- 單純顯示結果的運算網頁 -->
<?php 
// 傳值的函數是用陣列顯示 
//可以用print_r看參數內容
print_r($_GET);
echo "<br>";

// 需取值,否則會出現空陣列,沒辦法出現參數
$height=$_GET['height'];
$weight=$_GET['weight'];

echo "身高為：".$height;
echo "<br>";
echo "體重為：".$weight;

// 開始運算BMI值,取小數點後一位
// round=取小數點後一位 四捨五入
$bmi=round($weight/(($height/100)*($height/100)),1);
echo "<br>";
echo "BMI值為：".$bmi;
echo "<br>";

?>