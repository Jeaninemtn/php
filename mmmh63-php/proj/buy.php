<?php
require './parts/connect-db.php';
$pageName = 'buy';
$title = '完成訂購';
/*
if (!isset($_SESSION['admin'])) {
    // 沒有登入
    header('Location: product-list.php');
    exit;
}
if (empty($_SESSION['cart'])) {
    // 購物車裡沒有商品
    header('Location: product-list.php');
    exit;
}
*/
if (!isset($_SESSION['admin']) or empty($_SESSION['cart'])) {
    header('Location: product-list.php');
    exit;
}

// 購物車內的商品資訊
$rows = [];
$sids = [];
$totalPrice = 0; // 總價
$sids = array_keys($_SESSION['cart']);
$sql = sprintf("SELECT * FROM products WHERE sid IN (%s)", implode(',', $sids));
$stmt = $pdo->query($sql);

while ($r = $stmt->fetch()) {
    $r['quantity'] = $_SESSION['cart'][$r['sid']];  // 數量放進來
    $rows[$r['sid']] = $r;
    $totalPrice += $r['quantity'] * $r['price'];
}
$sql = sprintf("INSERT INTO `orders`
(`member_sid`, `amount`, `order_date`)
VALUES 
(%s, %s, NOW())", intval($_SESSION['admin']['id']), $totalPrice);

$pdo->query($sql);
$order_sid = $pdo->lastInsertId();
// printf("<!-- %s -->", $order_sid);

$stmt = $pdo->prepare("INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?, ?, ?, ?)");

foreach ($sids as $sid) {
    $item = $rows[$sid];

    $stmt->execute([
        $order_sid,
        $item['sid'],
        $item['price'],
        $item['quantity'],
    ]);
}

unset($_SESSION['cart']);


?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <h2>感謝訂購</h2>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script></script>
<?php include __DIR__ . '/parts/html-foot.php' ?>