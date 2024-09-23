<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filepath = "assets/" . $file;

    // Mengecek apakah file ada di folder assets
    if (file_exists($filepath)) {
        // Menetapkan header untuk mendownload file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } else {
        echo "File tidak ditemukan.";
    }
} else {
    echo "File tidak ditentukan.";
}
