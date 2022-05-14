<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <h1 style="font-size:3rem;text-align:center">

    <!-- 新手用法 -->
    <?php
        $bmi=$_GET['bmi'];
        echo "你的BMI為：".$bmi;
        echo "<br>";
        echo "判定結果為：".$_GET['result'];
    ?>
    <!-- 請根據BMI值,在結果頁上show出中文的BMI結果或建議 -->
    <?php
    /*if($bmi>=35){
        echo "重度肥胖";
    }else if($bmi>=30&&$bmi<35){
        echo "中度肥胖";
    }else if($bmi>=27&&$bmi<30){
        echo "輕度肥胖";
    }else if($bmi>=24&&$bmi<27){
        echo "過重";
    }else if($bmi>=18.5&&$bmi<24){
        echo "健康";
    }else if($bmi<18.5){
        echo "過輕";
    }*/
    ?>



    <div style="text-align:center;">
        <a href="bmi.html"><button>回到BMI計算</button></a>
    </div>
    </h1>
</body>
</html>