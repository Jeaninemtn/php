<?php

// 自動登入

session_start();

$_SESSION['admin'] = [
    'id' => '777',
    'email' => 'shin@aaa.com',
    'nickname' => '皮卡丘',
];

header('Location: index_.php'); // 轉到首頁

// https://www.php.net/manual/en/function.header.php