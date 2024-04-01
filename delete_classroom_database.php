<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = $_COOKIE['delete_classroom_id'] ; 
    
    $sql = "delete from classroom where classroomid = " . $id . " ; " ; 
    $sql1 = "delete from classroomschedule where classroomid = " . $id . " ; " ;
    if( !empty($id) )
    {
        try{
            $conn -> query( $sql ) ; 
            $conn -> query( $sql1 ) ; 
            echo "<script> location.href = 'forclassroom.php' ; </script>" ; 
        }catch( PDOException $e ){
            echo $e ; 
            echo "<script> alert('Error !'); </script>" ;
            echo "<script> location.href = 'forclassroom.php' ; </script>" ; 
        }        
        
    }

?>