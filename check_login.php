<?php
    //var_dump( $_SESSION ) ; 
    if( !count( $_SESSION ) ){  
        echo "<script> alert('You have logged out !'); </script>" ; 
        echo "<script> location.href = 'index3.php' ; </script>" ; 
    }else{ 
         //echo "<script> alert('Logged in " . var_dump( $_SESSION ) . " !'); </script>" ;    
    }
?>