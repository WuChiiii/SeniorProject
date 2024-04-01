<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    // $id = intval( $_COOKIE['delete_subject_id'] ) ; 
    // if( !empty( $id ) ){
    //     try{
    //         $query = $conn -> query( "delete from subject where id = " . $id . ";" ) ;
    //     }catch( PDOException $e ){
    //         // echo $e ; 
    //         echo "<script> alert('deletion failed ! '); </script>"; 
    //     }
    // }
    // echo "<script> window.location='forsubject.php'; </script>" ;
    $id = $_COOKIE['course_id'] ; 
    $sql = "delete from course_selection where id = " . $id . " ;" ; 
    if( !empty( $id ) ) 
    { 
        try{ 
            $conn -> query( $sql ) ; 
            echo "<script> location.href = 'forcourseselection.php' ; </script>" ; 
        }catch( PDOException $e ){ 
            echo $e ; 
            echo "<script> alert('Error !'); </script>" ;
            echo "<script> location.href = 'forcourseselection.php' ; </script>" ; 
        } 
    } 
?>
