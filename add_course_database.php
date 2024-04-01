<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php 
    include "connect.php" ;    
    $courseName = $_POST["Course_Name"] ; 
    $courseNumber = $_POST['Course_Number'] ; 
    $credit = $_POST['Credit'] ; 
    $period = $_POST['Period'] ; 
    $semester = $_POST['Semester'] ; 
    $groupType = $_POST['Group_Type'] ; 
    $classType = $_POST['Class_Type'] ; 
    $remarks = $_POST['Remarks'] ; 
    $program = $_POST['Program'] ; 
    $classroomType = $_POST['Classroom_Type'] ;//default, the prof can change it later ; 
    $studentNumber = $_POST['Student_Number'] ; //default, the prof can change it later 
    $userid = $_SESSION['id'] ; //!!!once the professors' name are changed, the table should be updated also !!!
    $sql = 'select * from teachers where userid =' . $userid .';';
    $query = $conn -> query( $sql ) ;
    $id_result = $query->fetch(PDO::FETCH_ASSOC);
    $teacherid=$id_result['teacherid'];//find userid在teacherdb中的id是什麼
    $time;
    $priority=1;//1代表教授,0代表kiki
    $classroom;

    var_dump( $courseNumber ) ; 
    var_dump( $groupType ) ; 
    var_dump( $userid ) ; 
    echo "-------------------------------\n\n\n" ; 

    $sql = 'select * from course_selection ; ' ; 
    $query = $conn -> query( $sql ) ; 
    $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ; 
    $flag = 0 ; //*** php executes all code even after redirect 
    foreach( $r as $data ):
        if( $data['courseNumber'] == $courseNumber && $data['groupType'] == $groupType && $data['teacherid'] == $userid )
        {
            $flag = 1 ; 
            echo "<script> alert('You have already added this course ! Please check in My Selection'); </script>" ;
            echo "<script> location.href = 'prof_my_selection.php' ; </script>" ; 
        }
    endforeach ; 

    $sql = "insert into course_selection values( null, '" . $courseName . "', '" . $courseNumber . "', '" . $credit . "', '" . $period . "', '" . $semester . "', '" . $groupType . "', '" . $classType . "', '" . $remarks . "', '" . $program . "', '" . $classroomType . "', '" . $studentNumber . "', '" . $teacherid . "','". $time . "', '" . $priority . "', '" . $classroom . "') ; " ; 
    echo $sql ; 
    if( $flag == 0 )
    {
        try{
            $conn -> query( $sql ) ; 
            $sql = "select max( id ) from course_selection;" ; 
            $query = $conn -> query( $sql ) ;
            $rc = $query -> fetch( PDO::FETCH_ASSOC ) ; 
            var_dump( $rc ) ; 
            $rc = $rc['max( id )'] ; 
            setcookie('course_id' , $rc , time() + 600 , '/') ;
            var_dump( $_COOKIE ) ;  
            echo "<script> window.location = 'prof_course_selection.php' ; </script>" ; 
        }catch( PDOException $e ){
            echo $e ;  
        }
    }
?> 