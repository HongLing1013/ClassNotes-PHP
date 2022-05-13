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
    ?>
    <br>
    <a href="bmi.html"><button>回到BMI計算</button></a>
    </h1>
</body>
</html>