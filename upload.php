<?php
// upload.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['apkFile'])) {
        $targetDir = "app/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . basename($_FILES["apkFile"]["name"]);
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

        // Allow only APK files
        if ($fileType !== 'apk') {
            echo "Only APK files are allowed.";
            exit;
        }

        // Move uploaded file
        if (move_uploaded_file($_FILES["apkFile"]["tmp_name"], $targetFile)) {
            echo "APK file uploaded successfully.";
        } else {
            echo "Failed to upload APK file.";
        }
    } else {
        echo "No file uploaded.";
    }
}
?>
