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
        echo "<script> window.location = 'forteacher.php' ; </script>" ; 
    }catch( PDOException $e ){
        echo $e ;  
    }
?>