<?php
  include "connect.php" ;
  $code = $_POST['subject_code'] ;
  $title = $_POST['subject_title'] ;
  $cat = $_POST['subject_category'] ;
  $sem = $_POST['sub_semester'] ;

  echo $code ;
  echo $title ;
  echo $cat ;
  echo $sem ;
  try {
    //$sql = "set @r = ( select count(*) from subject ) ;\n insert into subject values ( @r + 1, '" . $code . "', '" . $title . "', '". $cat . "', '" . $sem . "' ) ;" ; 
    $sql = "insert into subject values ( NULL, '" . $code . "', '" . $title . "', '". $cat . "', '" . $sem . "' ) ;" ; 
    echo $sql ; 
    $query = $conn -> query( $sql ) ; 
  }catch( PDOException $e ){
    echo $e ; 
  } 
  header('location:forsubject.php') ;
?>
