
<?php
	// if file is uploaded then we use encrypt="multipart/form-data"use $_fife array


 if (isset($_POST['login']))
 {
 	$err = array();
 	if (isset($_POST['username']) && !empty($_POST['username']) ){
 		$username =  $_POST['username'];
 	}
 	else
 		$err['username'] = "Enter username";
 	if (isset($_POST['password']) && !empty($_POST['password']) ){
 		$password =  $_POST['password'];
 	}
 	else
 		$err['password'] = "Enter password";

 	if (count($err) == 0) {
 		if($username == 'admin' && $password = 'admin')
 		   echo 'Loging Success';
 		else
 			echo "Loging Failled";
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

								<br>
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
	 </body>
</html>