<?php
    $servername = "localhost" ;
    $username = "root" ;
    $password = "";/*Enter your own password*/
    $dbname = "undergraduate_project";
    try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            include_once "create_db.php" ; 
            
            
            // ini_set('max_execution_time', 300) ; 
            // echo ini_get('max_execution_time') ; 
            // $path_to_pyexe =getcwd() ."\py_environment\python.exe";
            // $path_to_pip =getcwd() ."\py_environment\Scripts\pip.exe";
            // shell_exec("$path_to_pip"." install beautifulsoup4 " );
            // shell_exec("$path_to_pip"." install PyMySQL " );
            // $output=shell_exec("$path_to_pyexe"." ". getcwd() . "\crawler_course.py" ) ;
            // echo "python " . getcwd() . "\crawler_course.py" ; 
            // echo '<br>';
            
        } 
    catch(PDOException $e) 
        { 
             echo "Connection failed: " . $e->getMessage() ; 
        } 
?>