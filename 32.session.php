<?php
session_start(); // 啟用session功能
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

            echo $_SESSION['user'];  // 沒設定就呼叫

        ?>

    </div>
</body>
</html>