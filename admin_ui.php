<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin</title>

        <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <div class="content">
        <h3>Hi, <span>Admin</span></h3>
        <h3>Welcome <span></span></h3>
        <p>This is an admin login</p>
        <a href="login_form.php" class="btn">login</a>
        <a href="register_form.php" class="btn">register</a>
        <span style="cursor: pointer;" onclick = "logout_check();" class="btn">logout</span>
    </div>
</div>
<script>
    function logout_check()
    {
        if( confirm("Are U sure to logout?") )
        {
            window.location.href = "login_form.php" ;
        }
    }
</script>
</body>

</html>