<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
    <style>
        td {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<!-- https://summer10920.github.io/2020/05-12/php-baseclass-4/ -->

<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo $i;
        
    } // 會印出 0123456789
    ?>
    <?php
    for ($i = 0; $i < 4; $i++) {
        echo $i * 3 + 1;
    } // 會印出 1 4 7 10
    ?>

    <?php
    for ($j = 1; $j <= 10; $j += 3) {
        echo $j;
    // $j += 3 等於 $j = $j + 3
    } // 會印出 1 4 7 10
    // 第一輪的$j=1
    // 第二輪的$j=4
    // 第三輪的$j=7
    // 第四輪的$j=10
    ?>

</body>

</html>