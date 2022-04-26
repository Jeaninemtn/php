<?php

// PDO 資料庫連線設定

$db_host = 'localhost';  // 連線到哪一個主機
$db_name = 'mmmh63';  // 連線到哪一個資料庫
$db_user = 'root';  // 使用的帳號
$db_pass = '';  // 使用的密碼
// $db_charset = 'utf8' --- 使用的編碼
// $db_collate

// 建立dsn = data source name
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

// 要使用雙引號 因為要放變數進去 中間不要留空白 不需要加單引號!!

// $dsn = 'mysql:dbname={$db_name};host={$db_host}';
// 這個寫法應該也可以?ㄅ可是是塞變數@～@

// https://www.php.net/manual/en/book.pdo.php

// https://www.php.net/manual/en/pdo.construct.php

// 使用兩個冒號:: --- 靜態方法


$pdo_options = [ // 其他設定  這邊放一個array
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 錯誤模式 及 錯誤的例外模式
    // 可以透過try&catch去處理 (看講義的例子)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 以關聯式陣列的格式取出資料
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
]; // 類別裡定義的常數(以大寫呈現)

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);