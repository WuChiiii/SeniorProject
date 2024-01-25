<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
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
    //find the teacher userid with name
    $teachername = $_POST['teacher'];
    $sql = 'select teacherid from teachers where teacher_name ="' . $teachername .'";';
    $query = $conn -> query( $sql ) ;
    $id_result = $query->fetch(PDO::FETCH_ASSOC);
    $teacherid=$id_result['teacherid'];//find id在teacherdb中的id是什麼
    $time=$_POST['time'];
    $priority=0;//1代表教授,0代表kiki
    $classroom=$_POST['classroom'];

    var_dump( $courseNumber ) ; 
    var_dump( $groupType ) ; 
    var_dump( $userid ) ; 
    echo "-------------------------------\n\n\n" ; 

    $sql = 'select * from course_selection ; ' ; 
    $query = $conn -> query( $sql ) ; 
    $r = $query -> fetchAll( PDO::FETCH_ASSOC ) ; 
    $flag = 0 ; //*** php executes all code even after redirect 
    foreach( $r as $data ):
        if( $data['courseNumber'] == $courseNumber && $data['groupType'] == $groupType && $data['userid'] == $userid )
        {
            $flag = 1 ; 
            echo "<script> alert('You have already added this course ! Please check in Course Selection'); </script>" ;
            echo "<script> location.href = 'forcourseselection.php' ; </script>" ; 
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
            echo "<script> window.location = 'forcourseselection.php' ; </script>" ; 
        }catch( PDOException $e ){
            echo $e ;  
        }
    }
?> 