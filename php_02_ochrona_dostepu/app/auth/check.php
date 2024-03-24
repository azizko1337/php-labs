<?php
require_once dirname(__FILE__) . '/../../config.php';

session_start();

$role = $_SESSION['role'] ?? null;

if (empty ($role)) {
    header('Location: ' . _APP_URL . '/app/auth/login_view.php');
    exit();
}
