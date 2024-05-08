<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?>
<?php
if (isset($_POST['add_schedule_submit'])) {
    //translate for the table--------------------------------------------------------------------------------------
    $conn->exec("DELETE FROM pre4_international");$conn->exec("INSERT INTO pre4_international SELECT * FROM pre3_international");
    $conn->exec("DELETE FROM pre3_international");$conn->exec("INSERT INTO pre3_international SELECT * FROM pre2_international");
    $conn->exec("DELETE FROM pre2_international");$conn->exec("INSERT INTO pre2_international SELECT * FROM pre1_international");
    $conn->exec("DELETE FROM pre1_international");
    $result = $conn->query("SHOW TABLES LIKE 'internationalschedule'");
    if ($result->rowCount() > 0) 
        $conn->exec("INSERT INTO pre1_international SELECT * FROM internationalschedule");
    $conn->exec("DELETE FROM pre4_csie"); $conn->exec("INSERT INTO pre4_csie SELECT * FROM pre3_csie");
    $conn->exec("DELETE FROM pre3_csie");$conn->exec("INSERT INTO pre3_csie SELECT * FROM pre2_csie");
    $conn->exec("DELETE FROM pre2_csie");$conn->exec("INSERT INTO pre2_csie SELECT * FROM pre1_csie");
    $conn->exec("DELETE FROM pre1_csie");
    $result = $conn->query("SHOW TABLES LIKE 'normalschedule'");
    if ($result->rowCount() > 0) 
        $conn->exec("INSERT INTO pre1_csie SELECT * FROM normalschedule");
    $result = $conn->query("SHOW TABLES LIKE 'mapping_id'");
    if ($result->rowCount() > 0) {
        $conn->exec("UPDATE mapping_id
        SET pre4_classroom_id = pre3_classroom_id,
            pre3_classroom_id = pre2_classroom_id,
            pre2_classroom_id = pre1_classroom_id,
            pre1_classroom_id = classroom_id"); 
    }
        
     

    //end of translate---------------------------------------------------------------------------------------------

    $path_back = getcwd();
    $path_to_source = getcwd() ."\javaSourcecode";
    $path_to_java_bin = "\"C:\Users\user\AppData\Local\Programs\Eclipse Adoptium\jdk-17.0.7.7-hotspot\bin\"" ; //paste the absolute path 
    shell_exec( $path_to_java_bin . "\javac.exe -encoding utf-8 ".getcwd()."\javaSourcecode\*.java" );
    shell_exec("cd "."$path_to_source"." && " . $path_to_java_bin . "\jar.exe -cvfm mainclass.jar MANIFEST.MF *.class");
    shell_exec("cd "."$path_back");
    $output = shell_exec( $path_to_java_bin . "\java.exe -jar "."$path_to_source"."\mainclass.jar" );
    if($output!=null){
        var_dump($output);
    }
    else{
    echo "<script> window.location = 'forschedule.php' ; </script>" ;
    }

    // $path_back =getcwd();
    // $path_to_source =getcwd() ."\javaSourcecode"; 
    // shell_exec( "javac -encoding utf-8 ".getcwd()."\javaSourcecode\*.java" );
    // shell_exec("cd "."$path_to_source"." && jar -cvfm mainclass.jar MANIFEST.MF *.class");
    // shell_exec("cd "."$path_back");
    // $output = shell_exec( "java -jar "."$path_to_source"."\mainclass.jar" );
    // if($output!=null){
    //     var_dump($output);
    // }
    // else{
    // echo "<script> window.location = 'forschedule.php' ; </script>" ;
    // }
}
else 
{
    echo"123";
}
?>
