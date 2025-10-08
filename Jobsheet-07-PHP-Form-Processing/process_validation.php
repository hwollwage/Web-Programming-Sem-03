<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = trim($_POST["nama"]);
        $email = trim($_POST["email"]);
        $password = $_POST["password"];
        $errors = [];

        if (empty($nama)) {
            $errors[] = "Nama harus diisi. <br>";
        }

        if (empty($email)) {
            $errors[] = "Email harus diisi. <br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid. <br>";
        }

        if (empty($password)) {
            $errors[] = "Password harus diisi. <br>";
        } elseif (strlen($password) < 8) {
            $errors[] = "Password minimal 8 karakter. <br>";
        }

        if (count($errors) > 0) {
            foreach ($errors as $err) {
                echo $err;
            }
        } else {
            echo "<br>
                Nama: " . htmlspecialchars($nama) . "<br>
                Email: " . htmlspecialchars($email) . "</p>";
        }
    }   
?>
