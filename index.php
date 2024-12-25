<?php
session_start();

// Simple auth (redirect to login page, if unauthenticated)
if (!isset($_SESSION['user'])) {
    header('Location: src/auth/login.php');
    exit();
}else{
    header('Location: src/pages/dashboard');
    exit();
}
?>
