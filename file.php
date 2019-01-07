<?php
echo '<pre>';
	print_r($_POST);
	print_r($_FILES);
	if ( isset($_POST['upload']) ) {

		if ( $_FILES['photo']['error'] == 0 ) {
			if ( $_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/png' ) {
				if ($_FILES['photo']['size'] <= 1000000) {
					if(move_uploaded_file($_FILES['photo']['tmp_name'], 'image/'.$_FILES['photo']['name']))
						echo "file uploaded successfull";
					else
						echo "File upload Fail";

				}else
			 	echo "Please Upload less then 1 Mb";
			}else
			echo "Please type";
		}else
		echo "Error";

		if ( $_FILES['video']['error'] == 0 ) {
			if ( $_FILES['video']['type'] == 'video/mp4' || $_FILES['photo']['type'] == 'video/3gp' ) {
				if ($_FILES['video']['size'] <= 999999999999999999999999999999999999) {
					if(move_uploaded_file($_FILES['video']['tmp_name'], 'video/'.$_FILES['video']['name']))
						echo "file uploaded successfull <br>";
					else
						echo "File move  upload Fail <br>";

				} else
			 	echo "Please Upload less then 1 Mb <br>";
			}else
			echo "Please type <br>";
		}else
		echo "Error <br>";

		if ( $_FILES['cv']['error'] == 0 ) {
			if ( $_FILES['cv']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $_FILES['cv']['type'] == 'cv/txt' || $_FILES['cv']['type'] == 'cv/pdf' ) {
				if ($_FILES['cv']['size'] <= 999999999999999999999999999999999999) {
					if(move_uploaded_file($_FILES['cv']['tmp_name'], 'cv/'.$_FILES['cv']['name']))
						echo "file uploaded successfull";
					else
						echo "File upload Fail";

				} else
			 	echo "Please Upload less then 1 Mb";
			}else
			echo "Please type";
		}else
		echo "Error";




	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<label for="img">Image :</label>
		<input type="file" name="photo" id="img">
		<br/>
		<label for="video">Video :</label>
		<input type="file" name="video" id="video">
		<br/>
		<label for="cv">CV :</label>
		<input type="file" name="cv" id="cv">
		<br/>
		<input type="submit" name="upload">
	</form>
</body>
</html>