
<?php
	// if file is uploaded then we use encrypt="multipart/form-data"use $_fife array

if(isset($_COOKIE['username']) && $_COOKIE['username']!= null)
{
	session_start();
	$_SESSION['admin_username'] = $_COOKIE['username'];
	header('location:welcome.php');
}
 if (isset($_POST['login']))
 {
 	$err = array();
 	if (isset($_POST['username']) && !empty($_POST['username']) ){
 		$username =  $_POST['username'];
 		echo $username;
 	}
 	else
 		$err['username'] = "Enter username";
 	if (isset($_POST['password']) && !empty($_POST['password']) ){
 		$password =  $_POST['password'];
 		echo $password;
 	}
 	else
 		$err['password'] = "Enter password";

 	if (count($err) == 0) {
 		require 'connect.php';
 		$sql = "SELECT * FROM tbl_user where username='$username' and password= '$password' ";
 		$result = mysqli_query($conn,$sql);
 		if(mysqli_num_rows($result) == 1){
	 		   	 session_start();
	 		   $_SESSION['admin_username'] = $username;
	 		   //check remember
	 		   if(isset($_POST['remember']))
	 		   	     setcookie('username',$username,time()+7*24*60*60 );
	 		   header('location:welcome.php');
	 		  
	 		}else
	 		    echo "Login Failled ";
 		}
 			
 	
 }
?>
<!DOCTYPE html>
<html>
	 <head>
	 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="assets/css/docs.css" rel="stylesheet" >
	 
	 
	     <title>CMS System</title>
	     <!-- <script  src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
	     <!-- <script src="../bootstrap/dist/js/jquery-slim.min.js"></script> -->
		 <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
		 <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
		 <link rel="stylesheet" href="../bootstrap-social/bootstrap-social.css">
	 </head>
	 <body>
	 	<?php

	 	 if(isset($_GET['err']) && $_GET['err']==1)
	 	 	echo "Please Login continue";
	 	?>
	 	<div class="container ">
	 		<div class="row ">
	 		<div class="col-sm-6 ">
		    <form class=" form-horizontal"  action="#" method="post">
						<div class="card ">
						<div class="card-header"><h4>Login Area</h4 >
								<div class="input-group input-group-lg">
									 <span class="input-group-addon">
										 <span class="glyphicon glyphicon-envelope"></span>
									 </span>
									 <input class="form-control" type="text" placeholder="insert email" name="username" id="username">
								</div>
								<?php  if(isset($err['username']))
									echo '<br>'.$err['username']
								 ?>
								<br>
								<div class="input-group input-group-lg">
									 <span class="input-group-addon">
										 <span class=" "></span>
									 </span>
									 <input class="form-control" type="password" placeholder="insert fucking password" name="password" id="password">
								</div>
								<?php  if(isset($err['password']))
									echo $err['password']
								 ?>
								 
								 
								 	<input type="checkbox" name="remember" value="remember"> <b>Save Password</b>
								
								<br/>
								<br/>
	          					<div class="form-group">
											<div class="col-sm-12">
												<input type="submit" value="login" class="btn btn-success btn-block"  name="login">
											</div> 
								</div>
									<div class="col-sm-12">
									<a class="btn btn-block btn-social btn-google btt-lg">
										<span class="fa fa-google"></span> Sign in with google
									</a>
								</div>
								</div>
							</div>
						</div>
				     </form>
				 </div>
				</div>
			</div>
	 </body>
</html>