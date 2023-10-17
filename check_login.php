<?php
    //echo $_SERVER['REQUEST_URI'] ; 
    //var_dump( $_SESSION ) ; 
    if( !count( $_SESSION ) ){  
        echo "<script> alert('You have logged out !'); </script>" ;
        echo "<script> location.href = 'index3.php' ; </script>" ; 
    }else if( time() - $_SESSION['last_stamp'] > 600 ){
        echo "<script> alert('The session has expired !'); </script>" ;
        echo "<script> location.href = 'index3.php' ; </script>" ; 
    }else{  
        $_SESSION['last_stamp'] = time() ;  
        if( isset( $_SESSION['page_mode']) && $_SESSION['page_mode'] == 1 && $_SESSION['name'] == 'main' ) echo "<script> location.href = 'home3.php' ; </script>" ;
        else if( isset( $_SESSION['page_mode'] ) && !$_SESSION['page_mode'] && $_SESSION['name'] != 'main' ) 
        {
            //var_dump( $_SESSION['page_mode'] ) ; 
            //var_dump( $_SESSION['name'] ) ; 
            //echo "checkkkkkkkkkkk_login" ; 
            echo "<script> location.href = 'home.php' ; </script>" ;
        }
        //echo "<script> alert('Logged in " . var_dump( $_SESSION ) . " !'); </script>" ;    
    }
?>