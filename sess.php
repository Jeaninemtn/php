<?php
session_start(); // 啟用 session 功能

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);

// session可查看使用者登入狀態