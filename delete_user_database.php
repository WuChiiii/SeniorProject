<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = $_COOKIE['delete_user_id'] ; 
    /***Since the data of user is modified, the courses selected by the user should be deleted as well***/
    $sql = "delete from users where userid = " . $id . ";". "delete from course_selection where userid = " . $id . ";" ; 
    if( !empty( $id ) ) 
    { 
        try{ 
            
            $conn -> query( $sql ) ; 
            echo "<script> location.href = 'foruser.php' ; </script>" ; 
        }catch( PDOException $e ){ 
            echo $e ; 
        } 
    } 
    
    
?>