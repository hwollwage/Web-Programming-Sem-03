<?php
// koneksi.php
$host = "localhost";    // Nama host server database
$user = "root";         // Username MySQL
$pass = "";             // Password MySQL (kosongkan jika default XAMPP)
$db   = "prakwebdb";    // Nama database kamu

// Membuat koneksi
$connect = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
