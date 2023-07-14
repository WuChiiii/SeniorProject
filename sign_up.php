
<?php
        include_once "connect_server.php";
        function consoleLog( $str )
        {
            echo '<script type="text/javascript">' . 'console.log("' . $str . '");</script>';
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $hash = password_hash( $_POST['password'] , PASSWORD_DEFAULT );
        //$conpassw = $_POST['confirm_password'];
        $iden = $_POST['professor_type'];
        if( !empty($name) && !empty($email) && !empty($iden) )
        {
            echo $hash ; 
            $query = $conn -> prepare( "insert into account_info values(:name, :email, :hash, :iden); ");
            try{
                    $check = $query -> execute(array(
                    ':name' => $name ,
                    ':email' => $email ,
                    ':hash' => $hash ,
                    ':iden' => $iden 
                    ));
            }catch( PDOexception $e ){
                    echo "<script> alert('The email has been signed up!'); window.location.href = 'register_form.php';</script>" ;
                    echo "fail" ;
            }
        }
        echo "<script> alert('Sign up sucessfully ! '); window.location.href = 'login_form.php';</script>" ;
        
    ?>