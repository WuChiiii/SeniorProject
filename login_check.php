<?php
    include_once "connect_server.php";
    $email = $_POST['login_email'] ; 
    $passw = $_POST['login_password'] ; 
    $iden = $_POST['login_professor_type'] ;  
    var_dump($email) ; echo "</br>" ; 
    var_dump($passw) ; echo "</br>" ; 
    var_dump($iden) ; echo "</br>" ; 
    if( $email )
    {
        $query = $conn -> query( "select hash from account_info where email='" . $email . "' and iden='" . $iden . "';"  ) ;
        $r = $query -> fetch( PDO::FETCH_OBJ ) ;  
        var_dump( $r ) ; 
        $verify = password_verify( $passw , ((array)$r)['hash'] ) ; 
        if( $verify ) 
        {
            //$iden = $request['iden'];
            $newHash = password_hash( $passw , PASSWORD_DEFAULT ) ; 
            $conn -> query(
            'update account_info 
            set hash = "' . $newHash .'"
            where email = "' . $email . '";') ; 
            if( $iden == "admin" )
                echo "<script> window.location.href = 'admin_ui.php';</script>" ;
            else if( $iden == "professor" )
                echo "<script> window.location.href = 'professor_ui.php';</script>" ;
        }else{
            echo "<script> alert('Incorrect Email or password ! ( or login mode ) '); window.location.href = 'login_form.php';</script>" ;
        }
    }
?>