<?php
$conn =  mysqli_connect('localhost','root','','dbase') ;
if(!$conn)
	echo mysqli_error($conn).': Can\'t connect to the database';
?>
