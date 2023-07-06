<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>registration form</title>

        <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register</h3>
            <input type="name" name="name" required placeholder="enter name">
            <input type="email" name="email" required placeholder="enter email">
            <input type="password" name="password" required placeholder="enter password">
            <input type="confirmpassword" name="confirm password" required placeholder="enter confirmed password">
                <select name="professor_type">
                    <option value="professor">Professor</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="SUBMIT" value="REGISTER" class="form-btn">
                <p>Already have an account? <a href="login_form.php">login now</a></p>
        </form>
    </div>

</body>

</html>