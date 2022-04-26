<?php
require './part/connect-db.php';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$perPage = 5; // 每一頁有幾筆資料

$output = [
    'perPage' => $perPage,
    'totalRows' => 0,
    'totalPages' => 0,
    'page' => $page,
    'rows' => [],  // 分頁的資料
];

if ($page < 1) {
    header('Location: ab-list.php');
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
    $sql = sprintf("SELECT * FROM address_book LIMIT %s, %s", ($page - 1) * $perPage, $perPage);

    $output['rows'] = $pdo->query($sql)->fetchAll();
}

// header('Content-Type: application/json');  // 伺服器告訴用戶端文件的格式為 JSON
// echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
<?php include __DIR__ . '/part/html-head.php' ?>
<?php include __DIR__ . '/part/navbar.php' ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <!-- 包一個for迴圈 -->
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php endfor; ?>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>                
                </ul>
            </nav>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">電郵</th>
                <th scope="col">手機</th>
                <th scope="col">生日</th>
                <th scope="col">地址</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($output['rows'] as $r) : ?>
            <tr>
                <td><?= $r['sid'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['email'] ?></td>
                <td><?= $r['mobile'] ?></td>
                <td><?= $r['birthday'] ?></td>
                <td><?= $r['address'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>


</div>
<?php include __DIR__ . '/part/script.php' ?>
<script></script>
<?php include __DIR__ . '/part/html-foot.php' ?>