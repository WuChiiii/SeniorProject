<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $email = $_POST['email'] ; 
    $position = $_POST['position'] ; 
    $department = $_POST['department'] ;     

    $query = $conn -> query("select * from teachers where teacher_name = '" . $_SESSION['name'] . "';") ; 
    $row = $query -> fetch( PDO::FETCH_ASSOC ) ; 
    if( $row )
    {
        $id = ((array)$row)['teacherid'] ; 
        $sql = "update teachers set teacher_email = '" . $email . "', teacher_position = '" . $position . "', teacher_department = '" . $department . "' where teacherid = " . $id . ";" ;
        echo $sql ;
        try{
            $conn -> query( $sql ) ; 
        }catch( PDOException $e ){
            echo $e ; 
        }
    }else{
        $name = $_SESSION['name'] ; 
        $sql = "insert into teachers values( null , '" . $name . "', '" . $email . "', '" . $position . "', '" . $department . "' );" ; 
        try{
            $conn -> query( $sql ) ; 
        }catch( PDOException $e ){
            echo $e ; 
        }
    }

    echo "<script> location.href = 'prof_my_info.php'; </script>" ;
?>