<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = intval( $_COOKIE['delete_teacher_id'] ) ; 
    $sql = "delete from teachers where teacherid = " . $id ;
    //echo "id = " . $id ; 
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ;
            echo "<script> window.location = 'forteacher.php' ; </script>" ; 
        }catch( PDOException $e ){
            echo $e ;
        }
    }
    

?>