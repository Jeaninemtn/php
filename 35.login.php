<?php

session_start();

    $users = [
        'ning' => [
            'nickname' => '+00',
            'password' => '4321',
        ],
        'jia' => [
            'nickname' => '++0',
            'password' => '8765',
        ],
    ];

    if (!empty($_POST['user']) and !empty($_POST['password'])) {

        $user = empty($users[$_POST['user']]) ? '' : $users[$_POST['user']];

        if ($user == '') {
            echo 'Wrong Account';
            exit;
        } else {
            if ($_POST['password'] == $user['password']) {
                $_SESSION['user'] = [
                    'account' => $_POST['user'],
                    'nickname' => $user['nickname'],
                ];
            } else {
                echo 'Wrong Password';
                exit;
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php if (isset($_SESSION['user'])) : ?>
    <h2><?= $_SESSION['user']['nickname'] ?> </h2>
    <p><a href="36.logout.php">Log out</a></p>
    <?php else : ?>
    
    <form action="post">
        <input type="text" name="user" placeholder="Account">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php endif ?>
</body>
</html>