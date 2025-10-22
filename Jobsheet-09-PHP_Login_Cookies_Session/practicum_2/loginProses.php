<?php
include "koneksi.php"; // panggil koneksi database

// Pastikan data dikirim melalui form POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = md5($_POST['password']); // enkripsi md5 agar cocok dengan database

    // Query untuk mencari user dengan username & password yang cocok
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);

    // Mengecek apakah user ditemukan
    $cek = mysqli_num_rows($result);

    if ($cek) {
        echo "Anda berhasil login. Silakan menuju ";
        echo '<a href="homeAdmin.html">Halaman HOME</a>';
    } else {
        echo "Anda gagal login. Silakan ";
        echo '<a href="loginForm.html">Login kembali</a>';
    }

    mysqli_close($connect);
} else {
    echo "Form belum dikirim dengan benar!";
}
?>