<?php
require './parts/connect-db.php';
//echo $_SERVER['HTTP_REFERER'];
//exit;

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];

$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

if (empty($email)) {
    $output['error'] = '帳密錯誤'; //'沒有 Email';
    $output['code'] = 410;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
if (empty($password)) {
    $output['error'] = '帳密錯誤'; //'沒有給密碼';
    $output['code'] = 420;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "SELECT `id`, `email`,  `password`, `nickname` FROM members WHERE `email`=?";
// SQL Stmt


$stmt = $pdo->prepare($sql);  // 先把資料(SQL)準備好(還沒有執行)
$stmt->execute([$email]);  // 執行比對準備好的資料

$row = $stmt->fetch();  // 拿出比對正確的資料


if (!empty($row) and password_verify($password, $row['password'])) {
    $output['success'] = true;
    $output['code'] = 200;
    $_SESSION['admin'] = [
        'id' => $row['id'],
        'email' => $row['email'],
        'nickname' => $row['nickname'],
    ];
} else {
    $output['error'] = '帳密錯誤';
    $output['code'] = 430;
    $output['row'] = $row;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

// prepare and execute 準備資料 & 執行準備好的資料

// PDO::prepare — Prepares a SQL statement for execution and returns a statement object
// https://www.php.net/manual/en/pdo.prepare.php

//  PDOStatement::execute — Executes a prepared statement
//  https://www.php.net/manual/en/pdostatement.execute.php

// 胖箭頭(double arrow operator) & 瘦箭頭 (object operator)

// https://stackoverflow.com/questions/14037290/what-does-this-mean-in-php-or