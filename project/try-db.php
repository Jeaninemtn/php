<?php

require './part/connect-db.php';

$sql = "SELECT * FROM address_book LIMIT 5";
$stmt = $pdo->query($sql);
// stmt=statement
$row = $stmt->fetch();

// print_r($row);
echo json_encode($row);