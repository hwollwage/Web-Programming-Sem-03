<?php
    include "koneksi.php"; 
    $sql = "CREATE TABLE user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(100) NOT NULL,
        fullname VARCHAR(100),
        email VARCHAR(100)
    )";

    if (mysqli_query($connect, $sql)) {
        echo "Table 'user' successfully created!";
    } else {
        echo "Error creating table: " . mysqli_error($connect);
    }
?>
