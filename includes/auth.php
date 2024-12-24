<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Koneksi ke database
require_once '../config/db.php';

/**
 * Fungsi untuk login pengguna
 * @param string $email
 * @param string $password
 * @return bool
 */
function login($email, $password) {
    global $pdo;

    // Query untuk memeriksa pengguna
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role']
        ];
        return true;
    }
    return false;
}

/**
 * Fungsi untuk logout pengguna
 */
function logout() {
    session_unset();
    session_destroy();
    header("Location: ../auth/login.php");
    exit();
}

/**
 * Fungsi untuk mengecek role pengguna
 * @param string $role
 * @return bool
 */
function checkRole($role) {
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === $role;
}

/**
 * Fungsi untuk melindungi halaman dari akses tidak sah
 * @param array $roles
 */
function authorize($roles = []) {
    if (!isset($_SESSION['user']) || !in_array($_SESSION['user']['role'], $roles)) {
        header("Location: ../auth/login.php");
        exit();
    }
}
