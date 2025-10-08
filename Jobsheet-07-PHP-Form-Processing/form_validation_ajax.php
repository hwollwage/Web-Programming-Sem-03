<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Form Validation with AJAX</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <h2>Form Validation using AJAX</h2>
    <form id="ajaxForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result">
        
    </div>

    <script>
    $(document).ready(function(){
        $("#ajaxForm").submit(function(event){
            event.preventDefault(); // prevent page reload

            var nama = $("#nama").val().trim();
            var email = $("#email").val().trim();
            var password = $("#password").val().trim();

            $("#nama-error, #email-error, #password-error").text("");

            let valid = true;
            if(nama === ""){
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            }
            if(email === ""){
                $("#email-error").text("Email harus diisi.");
                valid = false;
            }
            if(password === ""){
                $("#password-error").text("Password harus diisi.");
                valid = false;
            }

            if(!valid) return;

            $.ajax({
                url: "process_validation.php",
                type: "POST",
                data: { nama: nama, email: email, password: password },
                success: function(response){
                    $("#result").html(response);
                }
            });
        });
    });
    </script>
</body>
</html>
