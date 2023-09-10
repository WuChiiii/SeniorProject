<?php
    include "connect.php" ;
    $name = $_POST['name'] ;
    $department = $_POST['department'] ; 
    $username = $_POST['username'] ; 
    $password = $_POST['password'] ;   
    $sql = "insert into users values( null, '" . $name . "', '" . $department . "', '" . $username . "', '" . password_hash( $password , PASSWORD_DEFAULT )  . "') ;" ;
    echo $sql ; 

    try{
        $conn -> query( $sql ) ; 
        echo "<script> window.location = 'foruser.php' ; </script>" ; 
    }catch( PDOException $e ){
        echo $e ;  
    }
?>