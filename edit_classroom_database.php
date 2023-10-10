<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
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
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ;
            
        }catch( PDOException $e ){
            echo $e ; 
        } 
    }else{
        echo "<script> alert('The classroom dosen't exist !'); </script>" ; 
    }
    echo "<script> location.href = 'forclassroom.php' ; </script>" ;  

?>