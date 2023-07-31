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
        <form action="sign_up.php" method="post">
            <h3>Register</h3>
            <div id="passw_check" style="color:red; display:none"> unmatched password !</div>
            <input type="name" name="name" required placeholder="enter name">
            <input type="email" name="email" required placeholder="enter email(@gmail.com / @gms.ndhu.edu.tw)" inlength="10" pattern="[a-zA-Z0-9]+(@gmail.com|@gms.ndhu.edu.tw)">
            <input type="password" name="password" required placeholder="enter password" onkeyup='checkpassw();' id = "passw"; maxlength="25" minlength="8">
            <input type="password" name="confirm_password" required placeholder="enter confirmed password" onkeyup='checkpassw();' id = "con_passw">
                <select name="professor_type">
                    <option value="professor">Professor</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="SUBMIT" value="REGISTER" class="form-btn">
                <p>Already have an account? <a href="login_form.php">login now</a></p>
        </form>
    </div>
    
<script>
    var passw_checker = 1 ;
    function passw_check( mode )
    {
        var passw_msg = document.querySelector('#passw_check') ; 
        passw_msg.style.display = mode ? "none" : "block" ; 
    }
    function checkpassw()
    {
        var passw = document.querySelector('#passw');
        var con_passw = document.querySelector('#con_passw');
        passw_checker = ( passw.value == con_passw.value ) ;
        console.log( passw_checker ) ; 
        passw_check( passw_checker ) ; 
    }
</script>
</body>

</html>