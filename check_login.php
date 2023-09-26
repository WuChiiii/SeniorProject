<?php
    //var_dump( $_SESSION ) ; 
    if( !count( $_SESSION ) ){  
        echo "<script> alert('You have logged out !'); </script>" ;
        echo "<script> location.href = 'index3.php' ; </script>" ; 
    }else if( time() - $_SESSION['last_stamp'] > 600 ){
        echo "<script> alert('The session has expired !'); </script>" ;
        echo "<script> location.href = 'index3.php' ; </script>" ; 
    }else{  
        $_SESSION['last_stamp'] = time() ;  
         //echo "<script> alert('Logged in " . var_dump( $_SESSION ) . " !'); </script>" ;    
    }
?>