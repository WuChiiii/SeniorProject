<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = intval( $_COOKIE['delete_subject_id'] ) ; 
    if( !empty( $id ) ){
        try{
            $query = $conn -> query( "delete from subject where id = " . $id . ";" ) ;
        }catch( PDOException $e ){
            // echo $e ; 
            echo "<script> alert('deletion failed ! '); </script>"; 
        }
    }
    echo "<script> window.location='forsubject.php'; </script>" ;
?>
