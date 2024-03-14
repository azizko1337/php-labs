<?php
require_once(dirname(__FILE__) . '/../../../config.php');

session_start();

if (!isset($_SESSION['role'])) {
    header('Location: ' . _APP_URL . '/app/auth/controllers/login.php');
    return;
}

if ($_SESSION['role'] != 'admin') {
    header('Location: ' . _APP_URL . '/app/auth/views/no_permission.php');
    return;
}
