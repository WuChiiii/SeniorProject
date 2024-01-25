<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = $_COOKIE['teacher_id'] ; 
    $name = $_POST['teacher_name'] ; 
    $email = $_POST['teacher_email'] ; 
    $position = $_POST['teacher_position'] ; 
    $department = $_POST['teacher_department'] ;
    $sql = 'select * from teachers where teacherid ="' . $id .'";';
    try{
        $query = $conn -> query( $sql ) ;
        $id_result = $query->fetch(PDO::FETCH_ASSOC);
        $userid=$id_result['userid'];
        $prename=$id_result['teacher_name'];//名字不同要改user、改teacher
    }
    catch( PDOException $e ){echo $e ; } 
    $sqlusers = "update users set name = '" . $name . "', department = '" . $department . "' where name = '" . $prename . "' ;" ;
    $sql = "update teachers set teacher_name = '" . $name . "', teacher_email = '" . $email . "', teacher_position = '" . $position . "', teacher_department = '" . $department . "', userid = '" . $userid . "' where teacherid = " . $id . " ;" ;    
    echo $sql ; 

    if( !empty( $id ) )
    {
        try{
            if($userid!=-1)
                $conn -> query( $sqlusers ) ; 
            $conn -> query( $sql ) ; 
        }catch( PDOException $e ){
            echo $e ; 
        }        
    }else{
        echo "<script> alert('The teacher has been deleted !'); </script>" ;
    }
    echo "<script> location.href = 'forteacher.php' ; </script>" ; 

?>