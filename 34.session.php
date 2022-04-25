<?php

session_start(); // 啟用session功能

// 如果要用三元運算子寫

if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 1;
}

echo $_SESSION['count'];