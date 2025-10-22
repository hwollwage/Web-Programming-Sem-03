<?php
    include "koneksi.php";

    $username = "admin";
    $password = md5("12345");
    $fullname = "Administrator";
    $email = "admin@example.com";

    $sql = "INSERT INTO user (username, password, fullname, email)
            VALUES ('$username', '$password', '$fullname', '$email')";

    if (mysqli_query($connect, $sql)) {
        echo "New user inserted successfully!";
    } else {
        echo "Error inserting data: " . mysqli_error($connect);
    }
?>
