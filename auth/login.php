<?php
session_start();
require_once '../includes/auth.php';

// If user has already logged, redirect to dashboard
if (isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}

// Login processing
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (login($email, $password)) {
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Email atau password salah!";
    }
}

$title = 'Login - Hotel Audit';

// Components
include '../includes/ui/header.php';
include '../includes/ui/navbar.php';
?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger">
                    <?= $error; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>

<?php
// Footer
include '../includes/ui/footer.php';
?>
