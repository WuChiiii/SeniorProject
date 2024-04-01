<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php 
    include "connect.php" ;    
    $id = $_COOKIE['course_id'] ; 
    var_dump( $id ) ; 

    $sql = "select * from courses where id = '" . $id . "' ;" ; 
    $query = $conn -> query( $sql ) ; 
    $row = $query -> fetch( PDO::FETCH_ASSOC ) ; 
    var_dump( $row ) ; 

    $courseName = ((array)$row)["courseName"] ; 
    $courseNumber = ((array)$row)['courseNumber'] ; 
    $credit = ((array)$row)['credit'] ; 
    $period = ((array)$row)['period'] ; 
    $semester = ((array)$row)['semester'] ;
    if( $semester == '一上' ) $semester = '1A' ; 
    else if( $semester == '一下' ) $semester = '1B' ;
    else if( $semester == '二上' ) $semester = '2A' ;
    else if( $semester == '二下' ) $semester = '2B' ;
    else if( $semester == '三上' ) $semester = '3A' ;
    else if( $semester == '三下' ) $semester = '3B' ;
    else if( $semester == '四上' ) $semester = '4A' ;
    else if( $semester == '四下' ) $semester = '4B' ;
    $groupType = ((array)$row)['groupType'] ; 
    if( $groupType == 'Local Group' ) $groupType = '1' ;
    else if( $groupType == 'International Group' ) $groupType = '0' ;      
    $classType = ((array)$row)['classType'] ; 
    if( $classType == '必(Required)' ) $classType = '1' ;
    else if( $classType == '選(elective)' ) $classType = '0' ;  
    $remarks = ((array)$row)['remarks'] ; 
    $program = ((array)$row)['program'] ; 
    $classroomType = 0 ;//default, the prof can change it later ; 
    $studentNumber = 999 ; //default, the prof can change it later 
    $userid = $_SESSION['id'] ; //!!!once the professors' name are changed, the table should be updated also !!!
    $sql = 'select * from teachers where userid =' . $userid .';';
    $query = $conn -> query( $sql ) ;
    $id_result = $query->fetch(PDO::FETCH_ASSOC);
    $teacherid=$id_result['teacherid'];//find id在teacherdb中的id是什麼
    $time;
    $priority=1;//1代表教授,0代表kiki
    $classroom="";

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
            echo "<script> alert('You have already selected this course ! Please check in My Selection'); </script>" ;
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
            echo "<script> window.location = 'check_selected_course.php' ; </script>" ; 
        }catch( PDOException $e ){
            echo $e ;  
        }
    }
?> 