<?php
    include "connect.php" ; 
    $id = $_COOKIE['teacher_id'] ; 
    $name = $_POST['teacher_name'] ; 
    $email = $_POST['teacher_email'] ; 
    $position = $_POST['teacher_position'] ; 
    $department = $_POST['teacher_department'] ;
    
    $sql = "update teachers set teacher_name = '" . $name . "', teacher_email = '" . $email . "', teacher_position = '" . $position . "', teacher_department = '" . $department . "' where teacherid = " . $id . " ;" ;    
    echo $sql ; 

    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ; 
        }catch( PDOException $e ){
            echo $e ; 
        }        
    }else{
        echo "<script> alert('The teacher has been deleted !'); </script>" ;
    }
    echo "<script> location.href = 'forteacher.php' ; </script>" ; 

?>