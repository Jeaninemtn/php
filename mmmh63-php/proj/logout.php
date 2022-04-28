<?php
session_start();

unset($_SESSION['admin']);

// 清除登入資料 -> 登出

header('Location: index_.php');

// 登出後轉到首頁