<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ;
    $id = $_COOKIE['user_id'] ; 
    $name = $_POST['name'] ;
    $department = $_POST['department'] ; 
    $account = $_POST['account'] ; 
    $hash = password_hash( $_POST['password'] , PASSWORD_DEFAULT ) ; 
    $sql = "update users set name = '" . $name . "', department = '" . $department . "', account = '" . $account . "', hash = '" . $hash . "' where userid = " . $id . " ;" ;
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ; 
        }catch( PDOException $e ){
            echo $e ; 
        }        
    }else{
        echo "<script> alert('The user has been deleted !'); </script>" ;
    }
    echo "<script> location.href = 'foruser.php' ; </script>" ; 

?>
