<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ;
    $name = $_POST['name'] ;
    $department = $_POST['department'] ; 
    $account = $_POST['account'] ; 
    $password = $_POST['password'] ;   
    $sql = "insert into users values( null, '" . $name . "', '" . $department . "', '" . $account . "', '" . password_hash( $password , PASSWORD_DEFAULT )  . "') ;" ;
    echo $sql;
    
    //check if the professor has been added to the teacher then the admin wants to add his/her account
    $query = $conn -> query("select * from `teachers` where `teacher_name`='".$name."';") ;
    $res = $query -> fetch(PDO::FETCH_ASSOC) ; 
    var_dump( $res ) ; 

    if( $res )
    {
        echo "<script> alert('You are trying to add an account for a professor from another department ! Please delete the professor's record in teacher section first !'); </script>" ;
        echo "<script> window.location = 'foruser.php' ; </script>" ; 
    }
    try{// add both teacher and user 
        $conn -> query( $sql ) ;
        $position = " "; 
        $email = " ";
        $num_query =$conn->query("select * from `users` where `name`='".$name."';");
        $num_result = $num_query->fetch(PDO::FETCH_ASSOC);
        $num = $num_result['userid'];
        echo $num;   
        $sql1 = "insert into teachers values( null, '" . $name . "', '" . $email . "', '" . $position . "', '" . $department  . "','". $num ."') ;" ;
        echo $sql1 ;
        $conn -> query( $sql1 ) ; 
        $sql = "select * from teachers where teacher_name ='" . $name  . "' ;" ;
        $query = $conn -> query( $sql ) ;
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $addschedule ="insert into professorschedule (professorid) values (".$result['teacherid'].");";
        $conn -> query( $addschedule ) ;
        echo "<script> window.location = 'foruser.php' ; </script>" ; 
    }catch( PDOException $e ){
        echo $e ;  
        echo "<script> alert('Duplicate account is invalid !'); </script>" ;
        echo "<script> window.location = 'foruser.php' ; </script>" ; 
    }
?>