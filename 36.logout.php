<?php

session_start();

unset($_SESSION['user']);

header('Location: 36.logout.php');