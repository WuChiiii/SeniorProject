<?php
    include "connect.php" ; 
    $name = $_POST['classroom_no'] ; 
    $department = $_POST['classroom_dept'] ; 
    $description = $_POST['classroom_desc'] ; 
    $seats = $_POST['classroom_no_seat'] ; 
    $type = $_POST['classroom_type'] ; 

    $sql = "insert into classroom values( null , '" . $name . "', '" . $department . "', '" . $description . "', '" . $seats . "', '" . $type . "' ) ; " ; 
    $conn -> query( $sql ) ; 
    echo "<script> location.href = 'forclassroom.php' ; </script>" ;
?>