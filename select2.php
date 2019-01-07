<?php

require "connect2.php";//db connection
$sql = "select * from tbl_user";
$result = mysqli_query($conn,$sql);//execute query and return result
$data = array();
//check number of rows in the result object
if (mysqli_num_rows($result) > 0)
	{
		while($d = mysqli_fetch_assoc($result))
		{
			array_push($data, $d);
		}
		
	}
else
{
	echo "Data not found";
}

echo "<pre>";
print_r($data);

?>