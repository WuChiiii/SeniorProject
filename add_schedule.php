<?php include "session.php" ; $_SESSION['page_mode'] = 0 ;//0 for admin; 1 for professors ?>
<?php
if (isset($_POST['add_schedule_submit'])) {
    //translate for the table--------------------------------------------------------------------------------------
    $deleteSql = "DELETE FROM pre4_international";
    $conn->exec($deleteSql);
    $dumpSql = "INSERT INTO pre4_international SELECT * FROM pre3_international";
    $conn->exec($dumpSql);
    $deleteSql = "DELETE FROM pre3_international";
    $conn->exec($deleteSql);
    $dumpSql = "INSERT INTO pre3_international SELECT * FROM pre2_international";
    $conn->exec($dumpSql);
    $deleteSql = "DELETE FROM pre2_international";
    $conn->exec($deleteSql);
    $dumpSql = "INSERT INTO pre2_international SELECT * FROM pre1_international";
    $conn->exec($dumpSql);
    $deleteSql = "DELETE FROM pre1_international";
    $conn->exec($deleteSql);
    $checkTableSql = "SHOW TABLES LIKE 'internationalschedule'";
    $result = $conn->query($checkTableSql);
    if ($result->rowCount() > 0) 
        $conn->exec("INSERT INTO pre1_international SELECT * FROM internationalschedule");
    $deleteSql = "DELETE FROM pre4_csie";
    $conn->exec($deleteSql);
    $dumpSql = "INSERT INTO pre4_csie SELECT * FROM pre3_csie";
    $conn->exec($dumpSql);
    $deleteSql = "DELETE FROM pre3_csie";
    $conn->exec($deleteSql);
    $dumpSql = "INSERT INTO pre3_csie SELECT * FROM pre2_csie";
    $conn->exec($dumpSql);
    $deleteSql = "DELETE FROM pre2_csie";
    $conn->exec($deleteSql);
    $dumpSql = "INSERT INTO pre2_csie SELECT * FROM pre1_csie";
    $conn->exec($dumpSql);
    $deleteSql = "DELETE FROM pre1_csie";
    $conn->exec($deleteSql);
    $checkTableSql = "SHOW TABLES LIKE 'normalschedule'";
    $result = $conn->query($checkTableSql);
    if ($result->rowCount() > 0) 
        $conn->exec("INSERT INTO pre1_csie SELECT * FROM normalschedule");
    
    $checkTableSql = "SHOW TABLES LIKE 'mapping_id'";
    $result = $conn->query($checkTableSql);
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
    var_dump($output);

    // echo $path_to_java_bin . "\javac.exe -encoding utf-8 " .getcwd()."\javaSourcecode\*.java<br/>" ; 
    // echo  "cd "."$path_to_source"." && " . $path_to_java_bin . "\jar.exe -cvfm mainclass.jar MANIFEST.MF *.class<br/>" ;
    // echo "cd ". $path_back . "<br/>" ; 
    // echo $path_to_java_bin . "\java.exe -jar "."$path_to_source"."\mainclass.jar" ; 

    echo "<script> window.location = 'forschedule.php' ; </script>" ;
}
else 
{
    echo"123";
}
?>
