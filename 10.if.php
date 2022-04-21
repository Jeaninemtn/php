<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $age = isset($_GET['age']) ? intval($_GET['age']) : 0;

    if ($age < 18) {
    ?>
        <h2>BYE BYE</h2>
        <img src="https://cdn.pixabay.com/photo/2017/02/20/18/03/cat-2083492_960_720.jpg" alt="" width="200px">

    <?php
    } else {
    ?>

        <h2>HELLO</h2>
        <img src="https://cdn.pixabay.com/photo/2014/04/13/20/49/cat-323262_960_720.jpg" alt="" width="200px">
    <?php
    }
    ?>

    <!-- 注意php<>的用法 後端語言的特性 -->
    <!-- 可以在網址後加上?age=10 or ?age=20 看看頁面變化 -->

</body>

</html>