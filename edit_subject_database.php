<?php
    include "connect.php" ; 
    $id = $_COOKIE['subject_id'] ; 
    $code = $_POST['subject_code'] ; 
    $title = $_POST['subject_title'] ; 
    $cat = $_POST['subject_category'] ; 
    $sem = $_POST['semester'] ; 
    $sql = "update subject set subject_code = '" . $code . "', subject_title = '" . $title . "', subject_category = '" . $cat . "', semester = '" . $sem . "' where subjectid = " . $id . " ;" ; 
    $query = $conn -> query( $sql ) ; 
    echo "<script> window.location = 'forsubject.php' ; </script> "; 
?>