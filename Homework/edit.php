<?php 
require_once "connect.php";
$id = $_GET['id'];
$selectsql = "SELECT * FROM tbl_homework where id=$id";

?>
<?php

 if (isset($_POST['update'])) {
 	$err = array();
 	if (isset($_POST['name']) && !empty($_POST['name']) )
 		$name =  $_POST['name'];
 	else
 		$err['name'] = "Enter Name";

 	if (isset($_POST['username']) && !empty($_POST['username']) )
 		$username =  $_POST['username'];
 	else
 		$err['username'] = "Enter username";

 	if (isset($_POST['status']) && !empty($_POST['status']) )
 		$status =  $_POST['status'];

 	if (isset($_POST['gender']) && !empty($_POST['gender']) )
 		$gender =  $_POST['gender'];
 	
 	else
 		$err['gender'] = "Select gender";

 	if (count($err) == 0) {
 		if( isset($status) ){
 			$sql = "UPDATE tbl_homework set name='$name',username='$username',status='$status',gender='$gender' WHERE id =$id";
 		}else
 		{
 			$sql = "UPDATE tbl_homework set name='$name',username='$username',gender='$gender' WHERE id =$id";
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
		<label for="country">Status :</label>
		    <select name="status" id="country">
		    	<option value="">Selecct Your Status</option>
			    <option value="unpublish">Unpublish</option>
				<option value="publish" checked="">Publish</option>
			</select>
		 <br>
		
	   <label for="radio">Gender</label>
	       <?php 
	       if( $data['gender'] == "male" ){
	       	echo '<input type="radio" name="gender" value="male" checked="" >Male ';
	       	echo '<input type="radio" name="gender" value="female"  >Female ';
	       }
	       else{
	       	echo '<input type="radio" name="gender" value="male" >Male ';
	       	echo '<input type="radio" name="gender" value="female" checked="" >Female ';
	       }
	       if(isset($err['gender']))
			   echo $err['gender']
	        ?>

		<br>
		<input type="submit" name="update" value="UPDATE">
		
	</form>

</body>
</html>