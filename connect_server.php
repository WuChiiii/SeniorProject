<?php
    $servername = "localhost" ;
    $username = "root" ;
    $password = "";/*Enter your own password*/
    $dbname = "undergraduate_project";
    try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            $conn -> query( "create table 
            if not exists account_info
            (
            name varchar(20) ,
            email varchar(50) primary key ,
            hash varchar(255),
            iden varchar(10)
            );" );
        }
    catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
?>