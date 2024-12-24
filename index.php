<?php
session_start();

// Simple auth (redirect to login page, if unauthenticated)
if (!isset($_SESSION['user'])) {
    header('Location: auth/login.php');
    exit();
}

// DB configuration
require_once 'config/config.php';

$title = 'Dashboard - Hotel Audit';

// Components
include 'includes/ui/header.php';
include 'includes/ui/navbar.php';
include 'includes/ui/sidebar.php';

?>

<!-- Konten Utama -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Dashboard</h1>
            <div class="row">
                <!-- Card Statistik -->
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Audits</h5>
                            <p class="card-text">25</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Completed Audits</h5>
                            <p class="card-text">15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Pending Audits</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Files Uploaded</h5>
                            <p class="card-text">50</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabel atau Komponen Lainnya -->
            <div class="mt-4">
                <h2>Recent Audits</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Module</th>
                            <th>Status</th>
                            <th>Auditor</th>
                            <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Reservasi</td>
                            <td>Completed</td>
                            <td>Auditor One</td>
                            <td>2024-12-20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Front Office</td>
                            <td>Pending</td>
                            <td>Auditor One</td>
                            <td>2024-12-19</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// Footer
include 'includes/ui/footer.php';
?>
