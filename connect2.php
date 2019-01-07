<?php
	$conn = mysqli_connect('localhost','root','','db_php2'); //servername,mysql usrname,mysql password,db name
	
	if(!$conn)
	{
		die('Database connection error');
	}

?>