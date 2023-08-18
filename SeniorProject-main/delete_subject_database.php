<?php
    include "connect.php" ; 
    $id = $_COOKIE['delete_subject_id'];
    $id = intval( $id ) ;
    if( !empty( $id ) ){
        try{
            $query = $conn -> query( "delete from subject where subjectid = " . $id . ";" ) ;
            //echo "<script> alert('delete secessfully ! '); </script>"; 
            echo "<script> window.location='forsubject.php'; </script>" ; 
        }catch( PDOException $e ){
            echo $e ; 
        }
    }
?>
