<?php
require './part/connect-db.php';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$perPage = 5; // 每一頁有幾筆資料

$output = [
    'perPage' => $perPage,
    'totalRows' => 0,
    'totalPages' => 0,
    'page' => $page,

];

$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$output['totalRows'] = $totalRows;

$totalPages = ceil($totalRows / $perPage);
// ceil(x)=求大於等於x的最小整數
$output['totalPages'] = $totalPages;
/*
$sql = "SELECT * FROM address_book LIMIT 5";
$stmt = $pdo->query($sql);

$row = $stmt->fetchAll();

//print_r($row);
*/

header('Content-Type: application/json');  
// 伺服器告訴用戶端文件的格式為JSON
echo json_encode($output, JSON_UNESCAPED_UNICODE);