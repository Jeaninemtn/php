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

    if ($age < 18) :
    ?>
        <h2>長大後再來</h2>
        <img src="https://cdn.pixabay.com/photo/2017/02/20/18/03/cat-2083492_960_720.jpg" alt="" width="200px">
    <?php
    else :
    ?>
        <h2>歡迎光臨</h2>
        <img src="https://cdn.pixabay.com/photo/2014/04/13/20/49/cat-323262_960_720.jpg" alt="" width="200px">
    <?php
    endif;
    ?>

    <!-- 另外一種寫法 @ @ -->

</body>

</html>