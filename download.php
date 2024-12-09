<?php
// download.php

$targetDir = "app/";
$apkFiles = glob($targetDir . "*.apk");

if (count($apkFiles) > 0) {
    $apkFile = $apkFiles[0];
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.android.package-archive');
    header('Content-Disposition: attachment; filename="' . basename($apkFile) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($apkFile));
    readfile($apkFile);
    exit;
} else {
    echo "No APK file available for download.";
}
?>
