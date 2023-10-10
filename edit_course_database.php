
<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php   
    include "connect.php" ; 
    $id = $_COOKIE['course_id'] ;   
    $sql = "update course_selection set courseName = '" . $_POST['SCourse_Name'] . "', courseNumber = '" . $_POST['SCourse_Number'] . "',  credit = '" .  $_POST['SCredit'] ;
    $sql = $sql . "', period = '" . $_POST['SPeriod'] . "', semester = '" . $_POST['SSemester'] . "', groupType = '" . $_POST['SGroup_Type'] ;  
    $sql = $sql . "', classType = '" . $_POST['SClass_Type'] . "', remarks = '" . $_POST['SRemarks'] . "', program = '" . $_POST['SProgram'] ; 
    $sql = $sql . "', classroomType = '" . $_POST['SClassroom_Type'] . "', studentNumber = '" . $_POST['SStudent_Number'] . "' where id = " . $id . ";" ; 

    try{
        $conn -> query( $sql ) ; 
        echo "<script> location.href = 'prof_my_selection.php'; </script>" ;
    }catch( PDOException $e ){
        echo $e ; 
    }
?>