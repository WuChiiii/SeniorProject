<?php
    include "connect.php" ; 
    $id = $_COOKIE['subject_id'] ; 
    $code = $_POST['subject_code'] ; 
    $title = $_POST['subject_title'] ; 
    $cat = $_POST['subject_category'] ; 
    $sem = $_POST['semester'] ; 
    $no = $_POST['subject_no_student'] ;   
    $type = $_POST['subject_classroom_type'] ;     
    $hour = $_POST['subject_hour'] ; 
    $sql = "update subject set subject_code = '" . $code . "', subject_title = '" . $title . "', subject_category = '" . $cat . "', semester = '" . $sem . "', subject_no_student = '" . $no . "', subject_classroom_type = '" . $type . "', subject_hour = '" . $hour . "' where subjectid = " . $id . " ;" ; 
    
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sql ) ; 
            echo "<script> window.location = 'forsubject.php' ; </script> "; 
        }catch( PDOException $e ){
            echo $e ; 
        }
    }else{
        echo "<script> alert('The subject has been deleted !'); </script>" ;
    }
    
?>