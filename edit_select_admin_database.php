
<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php   
    include "connect.php" ; 
    $id = $_COOKIE['course_id'] ;  
    $priority=0; 
    $temp=1;
    $sql = 'select * from teachers where teacher_name ="' . $_POST['teacher'] .'";';
    $query = $conn -> query( $sql ) ;
    $id_result = $query->fetch(PDO::FETCH_ASSOC);
    $teacherid=$id_result['teacherid'];
    $sql = "update course_selection set courseName = '" . $_POST['Course_Name'] . "', courseNumber = '" . $_POST['Course_Number'] . "',  credit = '" .  $_POST['Credit'] ;
    $sql = $sql . "', period = '" . $_POST['Period'] . "', semester = '" . $_POST['Semester'] . "', groupType = '" . $_POST['Group_Type'] ;  
    $sql = $sql . "', classType = '" . $_POST['Class_Type'] . "', remarks = '" . $_POST['Remarks'] . "', program = '" . $_POST['Program'] ; 
    $sql = $sql . "', classroomType = '" . $_POST['Classroom_Type'] . "', studentNumber = '" . $_POST['Student_Number'] ."', time = '" . $_POST['time'] ;
    $sql = $sql . "', priority = '" . $priority ."', classroom = '" . $_POST['classroom'] ."', teacherid = '" . $teacherid ."' where id = " . $id . ";" ; 

    try{
        $conn -> query( $sql ) ; 
        //echo "<script> location.href = 'forcourseselection.php'; </script>" ;
        echo "<script> location.href = 'forcourseselection.php'; </script>" ;
    }catch( PDOException $e ){
        echo $e ; 
    }
?>