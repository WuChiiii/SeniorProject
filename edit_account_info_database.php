<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?> 
<?php include "check_login.php" ?>
<?php
    include "connect.php" ; 
    $id = $_SESSION['id'] ; 
    $account = $_POST['account'] ; 
    
    $sql = "select * from users where userid = " . $id . ";" ; 
    $query = $conn -> query( $sql ) ; 
    $row = $query -> fetch( PDO::FETCH_ASSOC ) ; 
    $hash = ((array)$row)['hash'] ; 
    if( password_verify( $_POST['old_password'] , $hash ) )
    {
        $hash = password_hash( $_POST['new_password'] , PASSWORD_DEFAULT ) ; 
        $sql = "update users set hash = '" . $hash ."', account = '" . $account . "' where userid = " . $id . " ;"  ; 
        try
        {
            $conn -> query( $sql ) ; 
        } catch (PDOException $e) {
            echo $e ; 
        }
        echo "<script> location.href = 'prof_my_info.php' ; </script>" ; 
    }else{
        echo "<script> alert('Incorrect old password !') ; </script>" ;     
        echo "<script> location.href = 'prof_my_info.php' ; </script>" ; 
    }
?>