<?php
session_start();
$pageName = 'cart';
$title = '購物車列表';
require './parts/connect-db.php';

$rows = [];
$sids = [];
if (!empty($_SESSION['cart'])) {

    $sids = array_keys($_SESSION['cart']);

    $sql = sprintf("SELECT * FROM products WHERE sid IN (%s)", implode(',', $sids));


    $stmt = $pdo->query($sql);

    while ($r = $stmt->fetch()) {
        $r['quantity'] = $_SESSION['cart'][$r['sid']];
        $rows[$r['sid']] = $r;
    }
}

/*
echo json_encode([
    'rows' => $rows,
    'sids' => $sids,
]);
*/
?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">商品圖</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">單價</th>
                        <th scope="col">數量</th>
                        <th scope="col">小計</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sids as $sid) :
                        $item = $rows[$sid];
                    ?>
                    <tr>
                        <td><?= $sid ?></td>
                        <td><?= $item['book_id'] ?></td>
                        <td><?= $item['bookname'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= $item['price'] * $item['quantity'] ?></td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script></script>
<?php include __DIR__ . '/parts/html-foot.php' ?>