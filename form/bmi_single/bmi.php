<?php
/*echo "POST陣列的內容：";
print_r($_POST);
echo "<br>";
echo "GET陣列的內容：";
print_r($_GET);
echo "<br>";*/

if (!empty($_GET) || !empty($_POST)) { //不管有沒有收到參數都要顯示頁面
    if (empty($_GET)) {
        $height = $_POST['height'];
        $weight = $_POST['weight'];
    } else {
        $height = $_GET['height'];
        $weight = $_GET['weight'];
    };

    $bmi = round($weight / (($height / 100) * ($height / 100)), 1);

    // 請根據BMI值,在運算頁上計算出中文的BMI結果或建議,show在結果頁上
    $result = '';

    if ($bmi >= 35) {
        $result = "重度肥胖";
    } else if ($bmi >= 30 && $bmi < 35) {
        $result = "中度肥胖";
    } else if ($bmi >= 27 && $bmi < 30) {
        $result = "輕度肥胖";
    } else if ($bmi >= 24 && $bmi < 27) {
        $result = "過重";
    } else if ($bmi >= 18.5 && $bmi < 24) {
        $result = "健康";
    } else if ($bmi < 18.5) {
        $result = "過輕";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算-整合成一個頁面的版本</title>
</head>

<body>
    <?php
    // 如果接收的值是空的 沒有接收到資料 就顯示表單
    if (empty($_GET) && empty($_POST)) {
        // 下方會被當成echo
    ?>

        <h1>BMI計算</h1>
        <!-- 直接傳值到當前這個頁面 不分頁工作 -->
        <form action="bmi.php" method="get">
            <div>
                <label for="">身高(cm)：</label><input type="number" name="height" id="">
            </div>
            <div>
                <label for="">體重(kg)：</label><input type="number" name="weight" id="">
            </div>
            <div>
                <input type="submit" value="計算BMI">
            </div>
        </form>

    <?php
    } else { //上方php的中段
    ?>
        <!-- 顯示結果 -->
        <h1 style="font-size:3rem;text-align:center">
            你的BMI值為：<?= $bmi; ?>
        </h1>
        <h2 style="text-align:center">判定結果為：<?= $result; ?></h2>

        <div style="text-align:center">
            <a href="bmi.php"><button>回到BMI計算</button></a>
        </div>

    <?php
    } //echo的結尾
    ?>
</body>

</html>