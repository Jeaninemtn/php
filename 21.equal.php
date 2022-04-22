<pre>
<?php

$ar1 = [
    'name' => 'David',
    'age' => 28,
];
$ar2 = $ar1; // 設定值 複製一份再設定
// ar1 ar2是完全不相關的陣列

$ar3 = &$ar1; // 設定位址 設定參照 reference

$ar1['name'] = 'John';

echo json_encode($ar2);
echo '<br>';
echo json_encode($ar3);

$a = 10;
$b = &$a;
$b = 5;

echo '<br>';
echo "\$a = $a<br>"; // $a = 5    (o  .  o)

?>
</pre>
