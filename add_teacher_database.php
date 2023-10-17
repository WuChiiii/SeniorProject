<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ;
    $name = $_POST['name'] ;
    $email = $_POST['email'] ; 
    $position = $_POST['position'] ; 
    $department = $_POST['department'] ;   
    $sql = "insert into teachers values( null, '" . $name . "', '" . $email . "', '" . $position . "', '" . $department  . "') ;" ;
    echo $sql ; 

    try{
        $conn -> query( $sql ) ; 
    }catch( PDOException $e ){
        //echo $e ;
        echo "<script> alert('The operation is failed ! You may try to add a duplicate record for a teacher !') ; </script>" ;  
    }
    echo "<script> window.location = 'forteacher.php' ; </script>" ; 
?>