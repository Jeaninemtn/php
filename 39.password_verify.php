<?php

$hash = '$2y$10$1Z62EUWMCW8CPtbj3ktsCOGUHYBLVMjdMLVBXr47Zv0H15iHgvA.a';

echo password_verify('123456', $hash) ? 'OUI' : 'NON';
// 比對密碼是否一致

// https://www.php.net/manual/en/function.password-verify.php