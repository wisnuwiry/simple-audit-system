<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'includes/header.php';
?>
<div class="container mt-5">
    <h1>Dashboard Audit Hotel</h1>
    <p>Selamat datang, <?php echo $_SESSION['user_name']; ?>!</p>
    <a href="modules/audits/list.php" class="btn btn-primary">Kelola Audit</a>
</div>
<?php include 'includes/footer.php'; ?>
