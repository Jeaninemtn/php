<?php
session_start(); // 啟用session功能

// https://www.w3schools.com/php/php_sessions.asp

// https://www.webtech.tw/info.php?tid=33

// session是PHP4之後才有的新技術 以前都只會使用cookie來記錄資訊
// 差別
// session: 將資料儲存在伺服器端 但負荷檔案會由伺服器這邊承擔 安全性也比較高
// cookie: 將資料儲存在用戶端(所以需要用戶同意使用cookie) 伺服器不需要負荷檔案

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <div>

        <?php

            $_SESSION['user'] = 'Ning';  // 設定變數並給值 將變數儲存在伺服器上

            echo $_SESSION['user'];  // 再呼叫
            echo "<br>";
            print_r($_SESSION['user']);  // 也可以用這個呼叫

        ?>

    </div>
</body>
</html>

<?php

// 刪除session
// 1. unset($_SESSION['變數名稱']);  直接給變數名稱 單獨刪除該筆紀錄
// 2. session_destroy();  刪除所有的session
?>