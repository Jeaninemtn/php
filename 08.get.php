<?php

echo $_GET['a'] + $_GET['b'];

// 會跳兩個warning

// 但還是會相加 但因為沒有定義 所以結果為0

// 在網址後加上?a=100 結果會顯示100 (剩一個warning)
