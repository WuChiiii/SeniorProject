<?php
    include "connect.php" ;
    $id = $_COOKIE['user_id'] ; 
    $name = $_POST['name'] ;
    $department = $_POST['department'] ; 
    $username = $_POST['username'] ; 
    $hash = password_hash( $_POST['password'] , PASSWORD_DEFAULT ) ; 
    $sql = "update users set name = '" . $name . "', department = '" . $department . "', username = '" . $username . "', hash = '" . $hash . "' where userid = " . $id . " ;" ;
    
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
