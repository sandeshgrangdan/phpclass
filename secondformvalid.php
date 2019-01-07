<?php

	if( isset($_POST['login']) )
	{
		$err = array();
	
			//Check for name
			if( isset($_POST['name']) && !empty($_POST['name']) ){
				$name = $_POST['name'];
			}else{
				$err['name']= "Enter name";
			}
			
			//Check for description
			if( isset($_POST['description']) && !empty($_POST['description']) ){
				$description = $_POST['description'];
			}else{
				$err['description']= "Enter description";
			}
			
			//Check for order
			if( isset($_POST['order']) && !empty($_POST['order']) ){
				$order = $_POST['order'];
			}else{
				$err['order']= "Enter order";
			}
			
			
			//Check for number of error
			if(count($err) == 0){
				// if($username == 'admin' && $password =='admin'){
				// 	echo "Login Sucess";
				// }else{
				// 	echo "Login Failed";
				// }
				$date = date('y-m-d h:i:s');
				require "connect2.php";
				$sql = "Insert into tbl_user(name,description,odr,status,created_date) values('$name','$description','$order','$date')";
				mysqli_query($conn,$sql);
				if (mysqli_insert_id($conn) > 0)
				{
					echo"User created successfully";
				}
				else
				{
					echo"User creation unsuccessful";
				}

	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Validation and storing in db</title>
</head>
<body>

	<form action="" method="post" >
		<label>Name:</label>
		<input type="text" name="name">
			<?php 
				if (isset($err['name'])){
				echo $err['name'];
			}?><br><br>

		<label for = "description">Description</label>
		<input type="text" name ="description">
			<?php 
				if (isset($err['description'])){
				echo $err['description'];
			}?><br><br>

		<label>Order:</label>
		<input type="number" name="order">
		<?php 
				if (isset($err['order'])){
				echo $err['order'];
			}?><br><br>

		<label for="status">Status</label><br>
		Available<input type ="radio" name ="status">
		Unavailable<input type ="radio" name ="status">
			<?php 
				if (isset($err['status'])){
				echo $err['status'];
			}?><br><br>

		<input  type="submit" name= "login" value = "login">
	</form>
	
</body>
</html>