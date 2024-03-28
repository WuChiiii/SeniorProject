<?php
    $servername = "localhost" ;
    $username = "root" ;
    $password = getenv('DBpassw');/*Enter your own password*/
    $dbname = "undergraduate_project";
    try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            include_once "create_db.php" ; 
            
            
            // ini_set('max_execution_time', 300) ; 
            // echo ini_get('max_execution_time') ; 
            // shell_exec("pip install beautifulsoup4 " );
            // shell_exec("pip install PyMySQL " );
            // $output=shell_exec("python ". getcwd() . "\crawler_course.py" ) ;
            // echo "python " . getcwd() . "\crawler_course.py" ; 
            // echo '<br>';
            
        } 
    catch(PDOException $e) 
        { 
             echo "Connection failed: " . $e->getMessage() ; 
        } 
?>