<?php
if (isset($_POST['view'])) {
	header('location:view.php');
}

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

 	if (isset($_POST['status']) && !empty($_POST['status']) )
 		$status =  $_POST['status'];
 	else
 		$err['status'] = "Select status";

 	if (isset($_POST['gender']) && !empty($_POST['gender']) )
 		$gender =  $_POST['gender'];
 	
 	else
 		$err['gender'] = "Select Gender";

 	if (count($err) == 0) {
 		$date = date('y-m-d H:i:s');
 		require_once "connect.php";
 		$sql = "INSERT INTO tbl_homework(name,username,status,gender,date1) values('$name','$username','$status','$gender','$date')";
 		mysqli_query($conn,$sql);
 		if(mysqli_insert_id($conn) > 0)
 			echo "User Created Sucessfully";
 		else
 			echo "User Creation Fail";

 	}
 	else 
 		echo "Error in value";
 }
?>
<!DOCTYPE htnl>
<html>
	<head>
		<title>Table</title>
		<script src="package/dist/sweetalert2.min.js"></script>
	</head>
	<body>
		<h1>Registration Form</h1>
		<fieldset>
			<legend><b>Registration Form</b></legend>
			<form action="" method="post">
					<label for="name">Name :</label>
						<input type="text" name="name" id="name" placeholder="Name">
						<?php  if(isset($err['name']))
							   echo $err['name']
						 ?>
                 <br><br>

					<label for="username">Username :</label>
						<input type="text" name="username" id="username" placeholder="Enter Username">
						<?php  if(isset($err['username']))
							   echo $err['username']
						 ?>

				<br><br>

				<label for="country">Status :</label>
					 <select name="status" id="country">
					 	<option value="unpublish">Unpublish</option>
					 	<option value="publish">Publish</option>
				 </select>
					 <?php  if(isset($err['country']))
							   echo $err['country']
						 ?>

				<br><br>

				<label for="radio">Gender</label>
					<input type="radio" name="gender" value="male" checked="" id="radio">Male
					<input type="radio" name="gender" value="female">Female
					<?php  if(isset($err['gender']))
							   echo $err['gender']
						 ?>

                <br><br>

				<input type="submit" name="Register" value="Register">
				<input type="reset" name="reset"  value="Clear">
				<input type="Submit" name="view"  value="View">
				<br>
				&copy; &reg; a &lt; b &gt;  c &nbsp;
  
				<!-- <img src="abc.jpg" alt="ABCImage" title="sandesh"> -->
				
			</form>
		</fieldset>

	</body>
</html>
<!-- swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    swal(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
  ?>
			 	<script> swal({
			  position: 'top-end',
			  type: 'success',
			  title: 'Your work has been saved',
			  showConfirmButton: false,
			  timer: 1500
			});
			 	</script>
			 
}) -->