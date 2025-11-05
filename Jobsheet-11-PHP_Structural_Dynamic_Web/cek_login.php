<?php
if(session_status())
    session_start();

include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

$query = "SELECT username, level, salt, password as hashed_password 
            FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);
$salt = $row['salt'];
$hashed_password = $row['hashed_password'];

if($salt !== null & $hashed_password !== null) {
    $combined_password = $salt . $password;

    if(password_verify($combined_password, $hashed_password)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        header("Location: index.php");
    }else {
        pesan('danger', "login gagal. Password anda salah ");
        header("Location: login.php");
    }
}else {
    pesan('warning', "username tidak ditemukan");
    header("Location: login.php");
}
?>