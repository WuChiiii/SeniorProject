<?php
    include "connect.php" ; 
    $id = $_COOKIE['classroom_id'] ; 
    $no = $_POST['classroom_no'] ;     
    $dept = $_POST['classroom_dept'] ; 
    $desc = $_POST['classroom_desc'] ; 
    $seats = $_POST['classroom_no_seat'] ; 
    $type = $_POST['classroom_type'] ; 

    $sql = "update classroom set classroom_no = '" . $no . "', classroom_dept = '" . $dept . "', classroom_desc = '" . $desc . "', classroom_no_seat = '" . $seats . "', classroom_type = '" . $type . "' where classroomid = " . $id . " ; " ; 
    echo $sql ; 

    try{
        $conn -> query( $sql ) ;
        echo "<script> location.href = 'forclassroom.php' ; </script>" ;  
    }catch( PDOException $e ){
        echo $e ; 
    }
?>