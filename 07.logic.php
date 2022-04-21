<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logic</title>
</head>

<body>

    <!-- && / and 優先權的順序 -->

    <?php

    // echo (5 && 7);
    echo 5 && 7 ? 'true<br>' : 'false<br>';
    echo (5 && 7) ? 'true<br>' : 'false<br>';

    echo 5 and 7 ? 'true<br>' : 'false<br>';
    // and的優先權最低

    echo (5 and 7) ? 'true<br>' : 'false<br>';

    $a = 5 and 9;

    echo "$a; = $a<br>"

    ?>
</body>

</html>