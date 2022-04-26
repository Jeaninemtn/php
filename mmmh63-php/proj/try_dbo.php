<?php

// 測試用

require './parts/connect-db.php';

$sql = "SELECT * FROM address_book LIMIT 5"; 
$stmt = $pdo->query($sql);

$row = $stmt->fetch(); // fetch 也是拿資料的方法 跟query類似

//print_r($row);

echo json_encode($row);