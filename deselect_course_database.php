<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php 
    include "connect.php" ; 
    $id = $_COOKIE['course_id'] ; 
    $sql = "delete from course_selection where id = " . $id . " ;" ; 
    if( !empty( $id ) ) 
    { 
        try{ 
            $conn -> query( $sql ) ; 
            echo "<script> location.href = 'prof_my_selection.php' ; </script>" ; 
        }catch( PDOException $e ){ 
            echo $e ; 
        } 
    } 
?> 