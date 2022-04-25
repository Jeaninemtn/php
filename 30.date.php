<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
</head>
<body>
    <div>
        <?php
        
        date_default_timezone_set('Asia/Taipei');

        // 在這邊設定的話 只能更改這裡的時區

        // https://www.php.net/manual/en/function.date-default-timezone-set.php

        

        echo date("Y-m-d H:i:s").'<br>';
        echo time().'<br>';
        echo strtotime('2022-04-25').'<br>';
        echo date('Y-m-d H:i:s l', time() + 25*24*60*60).'<br>';

        // 25天之後 (25天*一天24小時*一小時60分鐘*一分鐘60秒)

        // https://www.php.net/manual/en/function.date.php

        ?>
    </div>
</body>
</html>