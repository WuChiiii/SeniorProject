<?php
    $servername = "localhost" ;
    $username = "root" ;
    $password = "";/*Enter your own password*/
    $dbname = "dbase";
    try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            $sql = file_get_contents('dbase.sql');
            try {
                $conn -> exec( $sql ) ; 
            }catch( PDOException $e ){

            }
        }
    catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
?>