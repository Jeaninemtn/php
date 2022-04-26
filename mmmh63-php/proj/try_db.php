<?php

// 測試用

require './parts/connect-db.php';

// require(較強烈) and include

// 因為有使用require 包含了其他頁面 所以可以使用其他頁面的變數

// https://www.php.net/manual/en/class.pdo.php


// 用SQL的語法
$sql = "SELECT * FROM address_book LIMIT 5"; // LIMIT 5 = 取前五筆資料
$stmt = $pdo->query($sql);

// stmt = statement

// https://www.php.net/manual/en/pdo.query.php
// php裡有三種query(方法的過載)(Java也有 但JS目前沒有這樣的用法)

$row = $stmt->fetchAll(); // fetch 也是拿資料的方法 跟query類似

// https://www.php.net/manual/en/pdostatement.fetch.php
// https://www.php.net/manual/en/pdostatement.fetchall.php

//print_r($row);
header('Content-Type: application/json');  // 伺服器告訴用戶端文件的格式為 JSON
echo json_encode($row, JSON_UNESCAPED_UNICODE);