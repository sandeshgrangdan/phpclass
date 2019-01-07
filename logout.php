<?php
	session_start();
	session_destroy();
	setcookie('username',null,time()-1);
	header('location:arraylogin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>