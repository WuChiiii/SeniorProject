<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ;
    $name = $_POST['name'] ;
    $email = $_POST['email'] ; 
    $position = $_POST['position'] ; 
    $department = $_POST['department'] ;  
    $userid=-1; 
    $sql = "insert into teachers values( null, '" . $name . "', '" . $email . "', '" . $position . "', '" . $department  . "', '" . $userid  . "') ;" ;
    echo $sql ; 

    try{// add both user and teacher 
        $conn -> query( $sql ) ; 
        $sql = "select * from teachers where teacher_name ='" . $name  . "' ;" ;
        $query = $conn -> query( $sql ) ;
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $addschedule ="insert into professorschedule (professorid) values (".$result['teacherid'].");"; 
        echo $addschedule;
        $conn -> query( $addschedule ) ; 
    }catch( PDOException $e ){
        //echo $e ;
        echo "<script> alert('The operation is failed ! You may try to add a duplicate record for a teacher !') ; </script>" ;  
    }
    echo "<script> window.location = 'forteacher.php' ; </script>" ; 
?>