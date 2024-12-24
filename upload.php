<?php
include_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $audit_id = 1; // Pretend the audit ID is always 1 for this example
    $staffId = 1; // Pretend the staff ID is always 1 for this example
    $targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0775, true);
} // check uploads directory, create if needed


    // Define file paths and names
    $logReservasiName = basename($_FILES["logReservasi"]["name"]);
    $logReservasiPath = $targetDir . $logReservasiName;

    $laporanHarianName = basename($_FILES["laporanHarian"]["name"]);
    $laporanHarianPath = $targetDir . $laporanHarianName;

    $dataIntegrasiName = basename($_FILES["dataIntegrasi"]["name"]);
    $dataIntegrasiPath = $targetDir . $dataIntegrasiName;

    // Move uploaded files
    $uploadSuccess = move_uploaded_file($_FILES["logReservasi"]["tmp_name"], $logReservasiPath) &&
                     move_uploaded_file($_FILES["laporanHarian"]["tmp_name"], $laporanHarianPath) &&
                     move_uploaded_file($_FILES["dataIntegrasi"]["tmp_name"], $dataIntegrasiPath);

    if ($uploadSuccess) {
        // Insert each file as a separate record into the database
        $stmt = $conn->prepare("INSERT INTO audit_files (audit_id, staff_id, file_name, file_path, timestamp) VALUES (?, ?, ?, ?, NOW())");

        // Bind and execute for logReservasi
        $fileName = $logReservasiName;
        $filePath = $logReservasiPath;
        $stmt->bind_param("iiss", $audit_id, $staffId, $fileName, $filePath);
        $stmt->execute();

        // Bind and execute for laporanHarian
        $fileName = $laporanHarianName;
        $filePath = $laporanHarianPath;
        $stmt->bind_param("iiss", $audit_id, $staffId, $fileName, $filePath);
        $stmt->execute();

        // Bind and execute for dataIntegrasi
        $fileName = $dataIntegrasiName;
        $filePath = $dataIntegrasiPath;
        $stmt->bind_param("iiss", $audit_id, $staffId, $fileName, $filePath);
        $stmt->execute();

        echo "Files successfully uploaded and records added to the database.";
    } else {
        echo "Error uploading files. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>
