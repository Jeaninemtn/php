<?php

$a = isset($_GET['a']) ? intval($_GET['a']) : 0;

$b = empty($_GET['b']) ? 0 : intval($_GET['b']);

$c = $_GET['c'] ?? 0;

// 比較新的語法 ?? = 如果前面的東西沒有定義 那會把問號後的東西丟回前面

echo $a + $b + $c;

# isset(): 判斷變數有沒有設定過
# intval(): 把值轉換為整數
# empty(): 判斷值是不是空的 false, 0, '', 空陣列, 沒設定過的變數

// https://www.php.net/manual/en/function.isset.php
// https://www.php.net/manual/en/function.intval.php
// https://www.php.net/manual/en/function.empty.php