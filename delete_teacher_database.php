<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = intval( $_COOKIE['delete_teacher_id'] ) ; 
    $sql = "delete from teachers where teacherid = " . $id ;
    $sqlcourse = "delete from course_selection where teacherid = " . $id . ";" ; 
    $deleteschedule ="delete from professorschedule where professorid = (". $id .");";

    //delete the corresponding account as well 
    $query = $conn -> query("select * from teachers where teacherid = (". $id .");") ;
    $res = $query -> fetch(PDO::FETCH_ASSOC) ; 
    if( $res['userid'] != -1 )
    {//the user account exists
        $userid =  $res['userid'] ; 
        $conn -> query("delete from users where userid = " . $userid . ";") ; 
    }
    //echo "id = " . $id ; 
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $deleteschedule ) ;
            $conn -> query( $sqlcourse ) ;
            $conn -> query( $sql ) ;
            
        }catch( PDOException $e ){
            echo $e ;
            echo "<script> alert('Error !'); </script>" ;
        }
    }echo "<script> window.location = 'forteacher.php' ; </script>" ; 
    

?>