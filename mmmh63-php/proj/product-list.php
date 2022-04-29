<?php

require './parts/connect-db.php';
$pageName = 'product-list';
$title = '產品列表';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$perPage = 4; // 每一頁有幾筆資料

$output = [
    'perPage' => $perPage,
    'totalRows' => 0,
    'totalPages' => 0,
    'page' => $page,
    'rows' => [],  // 分頁的資料
];

if ($page < 1) {
    header('Location: product-list.php');
    exit;
}


$t_sql = "SELECT COUNT(1) FROM products";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$output['totalRows'] = $totalRows;

$totalPages = ceil($totalRows / $perPage);
$output['totalPages'] = $totalPages;

if ($totalPages > 0) {
    if ($page > $totalPages) {
        header('Location: product-list.php?page=' . $totalPages);
        exit;
    }

    // 讀取分頁的資料
    $sql = sprintf("SELECT `sid`, `author`, `bookname`, `category_sid`, `book_id`, `publish_date`, `pages`, `price` FROM products ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);

    $rows = $output['rows'] = $pdo->query($sql)->fetchAll();
}

// header('Content-Type: application/json');  // 伺服器告訴用戶端文件的格式為 JSON
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">Button1</button>
                <button type="button" class="btn btn-primary">Button2</button>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <?php foreach ($rows as $r) : ?>
                <div class="col-lg-3">
                    <div class="card">
                        <img src="imgs/big/<?= $r['book_id'] ?>.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $r['bookname'] ?></h5>
                            <p class="card-text"><i class="fa-brands fa-bitcoin"></i> <?= $r['price'] ?></p>
                            <p class="card-text"><i class="fa-solid fa-book-open-reader"></i> <?= $r['author'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>


        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script></script>
<?php include __DIR__ . '/parts/html-foot.php' ?>