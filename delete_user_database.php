<?php
    include "connect.php" ; 
    $id = $_COOKIE['delete_user_id'] ; 
    $sql = "delete from users where userid = " . $id . ";" ; 
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ; 
            echo "<script> location.href = 'foruser.php' ; </script>" ;  
        }catch( PDOException $e ){
            echo $e ; 
        }        
    }
    
?>