<?php 
require_once "connect.php";
$id = $_GET['id'];
$selectsql = "SELECT * FROM tbl_user where id=$id";

?>
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
 		$password =  $_POST['password'];

 	if (isset($_POST['email']) && !empty($_POST['email']) )
 		$email =  $_POST['email'];
 	
 	else
 		$err['email'] = "Enter Email";

 	if (count($err) == 0) {
 		if( isset($password) ){
 			$sql = "UPDATE tbl_user set name='$name',username='$username',email='$email',password='$password' WHERE id =$id";
 		}else
 		{
 			$sql = "UPDATE tbl_user set name='$name',username='$username',email='$email' WHERE id =$id";
 		}
 		mysqli_query($conn,$sql);
 		if(mysqli_affected_rows($conn) > 0)
 			echo "User updated Sucessfully";
 		else
 			echo "User updated Fail";

 	}
 }
$result = mysqli_query($conn,$selectsql);
$data = mysqli_fetch_assoc($result);
echo "<pre>";
print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>
	<form method="post" action="#">
		
		Name : <input type="text" name="name" autocomplete="off" value="<?php echo $data['name'] ?>">
		<?php  if(isset($err['name']))
			   echo $err['name']
		 ?>
		<br>
		
		Username : <input type="text" name="username" autocomplete="off" value="<?php echo $data['username'] ?>">
		<?php  if(isset($err['username']))
			   echo $err['username']
		 ?>
		<br>
		
		Email : <input type="text" name="email" autocomplete="off" value="<?php echo $data['email'] ?>">
		<?php  if(isset($err['email']))
			   echo $err['email']
		 ?>
		<br>
		
		Password : <input type="Password" name="password">
		<br>
		<input type="submit" name="Register" value="UPDATE">
		<?php  if(isset($err['password']))
			   echo $err['password']
		 ?>
	</form>

</body>
</html>