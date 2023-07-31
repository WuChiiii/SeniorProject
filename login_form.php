<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>registration form</title>

        <link rel="stylesheet" href="style.css">
</head>

<?php include_once "connect_server.php"?>
<body>
    <div class="form-container">
        <form action="login_check.php" method="post">
            <h3>Log_in</h3>
            <input type="email" name="login_email" required placeholder="enter email" id = "email">
            <input type="password" name="login_password" required placeholder="enter password" id = "passw";>
                <select name="login_professor_type">
                    <option value="professor">Professor</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="SUBMIT" value="LOG IN" class="form-btn">
                <p>Have not signed up before? <a href="register_form.php">sign up</a></p>
        </form>
    </div>

</body>

</html>