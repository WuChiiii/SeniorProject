<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
  include "connect.php" ;
  $courseName = $_POST["subjectName"] ; 
  $courseNumber = $_POST['subjectNumber'] ; 
  $credit = $_POST['subjectCredit'] ; 
  $period = $_POST['subjectPeriod'] ; 
  $semester = $_POST['subjectSemester'] ; 
  $groupType = $_POST['subjectGroupType'] ; 
  $classType = $_POST['subjectClassType'] ; 
  $remarks = $_POST['subjectRemarks'] ; 
  $program = $_POST['subjectProgram'] ; 

  try {
    //$sql = "set @r = ( select count(*) from subject ) ;\n insert into subject values ( @r + 1, '" . $code . "', '" . $title . "', '". $cat . "', '" . $sem . "' ) ;" ; 
    $sql = "insert into subject values ( NULL, '" . $courseName . "', '" . $courseNumber . "', '". $credit . "', '" . $period . "', '" . $semester . "', '" . $groupType . "', '" . $classType . "', '" . $remarks . "', '" . $program . "' ) ;" ; 
    //echo $sql ; 
    $query = $conn -> query( $sql ) ; 
  }catch( PDOException $e ){
    //echo $e ;
  } 
  echo "<script> location.href = 'forsubject.php' ; </script>" ;
?>
