<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:memcenter.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入-把頁面回給前端</title>
</head>

<body>
    <h1>會員登入</h1>
    <!-- 做判斷 如果$error不是空的 是錯的 就顯示帳號密碼錯誤  -->
    <?php
    if(!empty($_GET['error'])){
        echo "<h3 style='color:red'>{$_GET['error']}</h3>";
    }
    ?>
    <form action="chklogin.php" method="post">
        <table>
            <tr>
                <td>帳號：</td>
                <td><input type="text" name="acc" id=""></td>
            </tr>
            <tr>
                <td>密碼：</td>
                <td><input type="password" name="pw" id=""></td>
            </tr>
        </table>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
</body>

</html>