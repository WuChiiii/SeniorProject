<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $name = $_POST['classroom_no'] ; 
    $department = $_POST['classroom_dept'] ; 
    $description = $_POST['classroom_desc'] ; 
    $seats = $_POST['classroom_no_seat'] ; 
    $type = $_POST['classroom_type'] ; 

    $sql = "insert into classroom values( null , '" . $name . "', '" . $department . "', '" . $description . "', '" . $seats . "', '" . $type . "' ) ; " ; 

    try{ 
        $conn -> query( $sql ) ; 
        $sql = "select * from classroom where classroom_no ='" . $name  . "' ;" ;
        $query = $conn -> query( $sql ) ;
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $add_classroom_sql ="insert into classroomschedule (classroomid) values (".$result['classroomid'].");"; 
        $conn -> query( $add_classroom_sql ) ;
    }catch( PDOException $e ){
        echo "<script> alert('The operation is failed ! You may tr to add a duplicate classroom !') ; </script>" ;  
        // echo $e ; 
    }
    
    echo "<script> location.href = 'forclassroom.php' ; </script>" ;
?>