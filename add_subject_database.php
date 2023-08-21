<?php
  include "connect.php" ;
  $code = $_POST['subject_code'] ;
  $title = $_POST['subject_title'] ;
  $cat = $_POST['subject_category'] ;
  $sem = $_POST['sub_semester'] ;
  $no = $_POST['subject_no_student'] ;    
  $type = $_POST['subject_classroom_type'] ;     
  $peri = $_POST['subject_hour'] ; 

  echo $code ;
  echo $title ;
  echo $cat ;
  echo $sem ;
  echo $no ; 
  echo $type ;
  echo $peri ; 

  try {
    //$sql = "set @r = ( select count(*) from subject ) ;\n insert into subject values ( @r + 1, '" . $code . "', '" . $title . "', '". $cat . "', '" . $sem . "' ) ;" ; 
    $sql = "insert into subject values ( NULL, '" . $code . "', '" . $title . "', '". $cat . "', '" . $sem . "', '" . $no . "', '" . $type . "', '" . $peri . "' ) ;" ; 
    //echo $sql ; 
    $query = $conn -> query( $sql ) ; 
  }catch( PDOException $e ){
    echo $e ; 
  } 
  header('location:forsubject.php') ;
?>
