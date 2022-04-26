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

if ($page < 1) {
    header('Location: ab-list-2.php');
    exit;
}

$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$output['totalRows'] = $totalRows;

$totalPages = ceil($totalRows / $perPage);
$output['totalPages'] = $totalPages;

if ($totalPages > 0) {
    if ($page > $totalPages) {
        header('Location: ab-list.php?page=' . $totalPages);
        exit;
    }

    // 讀取分頁的資料



}


/*
$sql = "SELECT * FROM address_book LIMIT 5";
$stmt = $pdo->query($sql);

$row = $stmt->fetchAll();

//print_r($row);
*/


header('Content-Type: application/json');  // 伺服器告訴用戶端文件的格式為 JSON
echo json_encode($output, JSON_UNESCAPED_UNICODE);