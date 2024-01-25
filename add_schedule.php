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

    //end of translate---------------------------------------------------------------------------------------------


    $path_back =getcwd();
    $path_to_source =getcwd() ."\javaSourcecode";
    $path_to_jar=getcwd() ."/environment/jar.exe";
    //example of my pathtojar:$path_to_jar="C:\Program Files\Java\jdk-20\bin\jar.exe";
    $path_to_javac=getcwd() ."/environment/javac.exe";
    //example of my pathtojavac:$path_to_javac="C:\Program Files\Java\jdk-20\bin\javac.exe";
    $java_Exe =getcwd() ."/environment/java.exe"; 
    //example of my javapath:$java_Exe = "C:\Program Files\Java\jdk-20\bin\java.exe";
    shell_exec( "\"$path_to_javac\"-encoding utf-8 $path_to_source\*.java" );
    shell_exec("cd $path_to_source && \"$path_to_jar\" -cvfm mainclass.jar MANIFEST.MF *.class");
    shell_exec("cd $path_back");
    $output = shell_exec( "\"$java_Exe\" -jar $path_to_source\mainclass.jar" );
    var_dump($output);
    //echo "<script> window.location = 'forschedule.php' ; </script>" ;
}
else 
{
    echo"123";
}
?>
