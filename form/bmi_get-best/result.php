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
    你的BMI值為：<?=$_GET['bmi'];?>
    </h1>
    <h2>判定結果為：<?=$_GET['result'];?></h2>

        <!-- 請根據BMI值,在結果頁上show出中文的BMI結果或建議 -->
        
        <div style="text-align:center;">
            <a href="bmi.html"><button>回到BMI計算</button></a>
        </div>
</h1>
</body>
</html>