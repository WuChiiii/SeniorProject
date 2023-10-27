<?php include "session.php" ; $_SESSION['page_mode'] = 1 ;//0 for admin; 1 for professors ?>
<?php
if (isset($_POST['add_schedule_submit'])) {
    // Execute the Java program and capture the output
   // $output = shell_exec('java -cp /javaSourcecode mainclass');
    $output = shell_exec( "\"C:\Program Files\Java\jdk-20\bin\java.exe\" -jar C:/xampp\htdocs\SeniorProject\javaSourcecode\mainclass.jar" );
    var_dump($output);
    // $output = shell_exec( "test.bat" );
    // var_dump($output);
    echo "<script> window.location = 'forschedule.php' ; </script>" ; 
}
else 
{
    echo"123";
}
?>
