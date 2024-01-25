<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ;
    $id = $_COOKIE['userid'] ; 
    $name = $_POST['name'] ;
    $department = $_POST['department'] ; 
    $account = $_POST['account'] ; 
    $hash = password_hash( $_POST['password'] , PASSWORD_DEFAULT ) ; 
    $sql = "update users set name = '" . $name . "', department = '" . $department . "', account = '" . $account . "', hash = '" . $hash . "' where userid = " . $id . " ;" ;
    $sqlname = 'select * from user where userid ="' . $id .'";';
    try{
        $query = $conn -> query( $sqlname ) ;
        $id_result = $query->fetch(PDO::FETCH_ASSOC);
        $prename=$id_result['name'];
    }
    catch( PDOException $e ){echo $e ; } 
    $sqletacher = "update teachers set teacher_name = '" . $name . "', teacher_department = '" . $department . "' where teacher_name = '" . $prename . "' ;" ;
    if( !empty( $id ) )
    {
        try{
            $conn -> query( $sqletacher ) ; 
            $conn -> query( $sql ) ; 
        }catch( PDOException $e ){
            echo $e ; 
        }        
    }else{
        echo "<script> alert('The user has been deleted !'); </script>" ;
    }
    echo "<script> location.href = 'foruser.php' ; </script>" ; 

?>
