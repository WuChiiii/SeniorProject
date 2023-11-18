<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ;
    $name = $_POST['name'] ;
    $department = $_POST['department'] ; 
    $account = $_POST['account'] ; 
    $password = $_POST['password'] ;   
    $sql = "insert into users values( null, '" . $name . "', '" . $department . "', '" . $account . "', '" . password_hash( $password , PASSWORD_DEFAULT )  . "') ;" ;
    echo $sql ;
    $addschedule ="insert into professorschedule values ();"; 
    echo $addschedule;
    try{
        $conn -> query( $sql ) ; 
        $conn -> query( $addschedule ) ;
        echo "<script> window.location = 'foruser.php' ; </script>" ; 
    }catch( PDOException $e ){
        echo $e ;  
    }
?>