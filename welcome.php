<?php
	session_start();
		if( !isset($_SESSION['admin_username']) )
			header('location:arraylogin.php?err=1');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo $_SESSION['admin_username'];
	?>
	<a href="logout.php">Logout</a>
</body>
</html>