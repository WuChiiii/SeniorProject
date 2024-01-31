<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php 
    include "connect.php" ;    
    for($grade=1;$grade<=4;$grade++){
        for($week=1;$week<=5;$week++){
            for($num=1;$num<=13;$num++){//資工組國際組同時改
                $time=$week."-".$num;
                $str="csieclassroom".$grade."-".$time;
                $classroomname = $_POST[$str];//a337
                $str="csiecourse".$grade."-".$time;
                $course= $_POST[$str];
                //echo "update normalschedule set " . $time . " = -1 where grade = " . $grade . ";";
                if($classroomname==NULL)
                    $classroomname = "A337";//沒填教室預設A337
                if($course==NULL){
                    $conn -> query( "update normalschedule set `" .$time. "` = -1 where grade = " . $grade . ";"  );
                }
                else{
                    $parts = explode('\\',$course);
                    $courseName=$parts[0];
                    $query = $conn -> query(  "select * from course_selection where courseName = '" . $courseName . "';" ); 
                    $courseid = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                    $conn -> query( "update normalschedule set `" .$time. "`= " . $courseid['id'] . " where grade = " . $grade . ";");
                    $query= $conn -> query(  "select * from classroom where classroom_no = '" . $classroomname . "';" );
                    $classroom = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                    $conn -> query( "update mapping_id set classroom_id = '" . $classroom['classroomid'] . "' where class_id = " . $courseid['id'] . ";"  );
                    //改mapping id的classroom以及classroom timetable即可
                }
                if($grade<4){//改國際組
                    $str="internationalclassroom".$grade."-".$time;
                    $classroomname = $_POST[$str];//a337
                    $str="internationalcourse".$grade."-".$time;
                    $course= $_POST[$str];
                    if($classroomname==NULL)
                        $classroomname = "A337";//沒填教室預設A337
                    if($course==NULL)
                        $conn -> query( "update internationalschedule set `" .$time. "` = -1 where grade = " . $grade . ";"  );
                    else{
                        $parts = explode('\\',$course);
                        $courseName=$parts[0];
                        $query = $conn -> query(  "select * from course_selection where courseName = '" . $courseName . "';" ); 
                        $courseid = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                        $conn -> query( "update internationalschedule set `" .$time. "` = " . $courseid['id'] . " where grade = " . $grade . ";");
                        $query= $conn -> query(  "select * from classroom where classroom_no = '" . $classroomname . "';" );
                        $classroom = $query -> fetch( PDO::FETCH_ASSOC ) ; 
                        $conn -> query( "update mapping_id set classroom_id = '" . $classroom['classroomid'] . "' where class_id = " . $courseid['id'] . ";"  );
                        //改mapping id的classroom以及classroom timetable即可
                    }
                }
            }
        }
    }
    echo "<script> location.href = 'forschedule.php' ; </script>"
?>