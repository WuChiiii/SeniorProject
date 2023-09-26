<?php
    include "connect.php" ; 
    $id = $_COOKIE['delete_classroom_id'] ; 
    
    $sql = "delete from classroom where classroomid = " . $id . " ; " ; 
    if( !empty($id) )
    {
        try{
            $conn -> query( $sql ) ; 
            echo "<script> location.href = 'forclassroom.php' ; </script>" ; 
        }catch( PDOException $e ){
            echo $e ; 
        }        
    }

?>