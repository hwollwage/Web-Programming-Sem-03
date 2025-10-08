<!DOCTYPE html>
<html>
<head><title>HTML Injection Prevention - Separate Inputs</title></head>
<body>
<form method="post">
    Enter text: <input type="text" name="text_input"><br>
    Enter email: <input type="email" name="email_input"><br>
    <input type="submit" value="Send"><br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $text  = filter_input(INPUT_POST, 'text_input', FILTER_UNSAFE_RAW);
        $email = filter_input(INPUT_POST, 'email_input', FILTER_SANITIZE_EMAIL);

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email is valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } elseif (!empty($email)) {
            echo "<p>Email not valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>No email provided.</p>";
        }

        if (!empty($text)) {
            echo "<p>Text (raw display) : " . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>No text provided.</p>";
        }
    }
?>
</body>
</html>
