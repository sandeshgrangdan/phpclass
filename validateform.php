<?php

 if (isset($_POST['Register'])) {
 	$err = array();
 	if (isset($_POST['name']) && !empty($_POST['name']) )
 		$name =  $_POST['name'];
 	else
 		$err['name'] = "Enter Name";

 	if (isset($_POST['username']) && !empty($_POST['username']) )
 		$username =  $_POST['username'];
 	else
 		$err['username'] = "Enter username";

 	if (isset($_POST['password']) && !empty($_POST['password']) )
 		$password = md5($_POST['password']);
 	else
 		$err['password'] = "Enter password";

 	if (isset($_POST['email']) && !empty($_POST['email']) )
 		$email =  $_POST['email'];
 	
 	else
 		$err['email'] = "Enter Email";

 	if (count($err) == 0) {
 		$date = date('y-m-d H:i:s');
 		require "connect.php";
 		$sql = "INSERT INTO tbl_user(name,username,email,password,created_date) values('$name','$username','$email','$password','$date')";
 		mysqli_query($conn,$sql);
 		if(mysqli_insert_id($conn) > 0)
 			echo "User Created Sucessfully";
 		else
 			echo "User Creation Fail";

 	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Validate Form</title>
</head>
<body>
	<form method="post" action="#">
		
		Name : <input type="text" name="name">
		<?php  if(isset($err['name']))
			   echo $err['name']
		 ?>
		<br>
		
		Username : <input type="text" name="username">
		<?php  if(isset($err['username']))
			   echo $err['username']
		 ?>
		<br>
		
		Email : <input type="text" name="email">
		<?php  if(isset($err['email']))
			   echo $err['email']
		 ?>
		<br>
		
		Password : <input type="Password" name="password">
		<br>
		<input type="submit" name="Register" value="Register">
		<?php  if(isset($err['password']))
			   echo $err['password']
		 ?>
	</form>

</body>
</html>