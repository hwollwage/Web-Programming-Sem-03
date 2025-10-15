<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    if (!is_dir($targetdir)) mkdir($targetdir, 0777, true);

    $targetfile = $targetdir . basename($_FILES["myFile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    $imageTypes = ['txt', 'pdf', 'doc', 'docx'];
    $maxsize = 5*1024*1024;

    if (in_array($fileType, $imageTypes) && $_FILES["myFile"]["size"]<=$maxsize) {
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetfile)) {
            echo "Gambar berhasil diunggah.<br>";
            echo "<img src='$targetfile' width='200'>";
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "file tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
