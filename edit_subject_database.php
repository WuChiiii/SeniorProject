<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = $_COOKIE['subject_id'] ; 
    $name = $_POST["name"] ; 
    $number = $_POST['number'] ; 
    $credit = $_POST['credit'] ; 
    $period = $_POST['period'] ; 
    $semester = $_POST['semester'] ; 
    $groupType = $_POST['groupType'] ; 
    $classType = $_POST['classType'] ; 
    $remarks = $_POST['remarks'] ; 
    $program = $_POST['program'] ; 
    $sql = "update subject set name = '" . $name . "', number = '" . $number . "', credit = '" . $credit . "', period = '" . $period . "', semester = '" . $semester . "', groupType = '" . $groupType . "', classType = '" . $classType . "', remarks = '" . $remarks . "', program = '" . $program .  "' where id = " . $id . " ;" ; 
    
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ;        
        }catch( PDOException $e ){
            echo $e ; 
            echo "<script> alert('Error !'); </script>" ;
        }
    }else{
        echo "<script> alert('The subject has been deleted !'); </script>" ;
    }echo "<script> window.location = 'forsubject.php' ; </script> "; 
    
?>