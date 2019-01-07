<?php
	$info =   array(
		'name' => 'Sandesh Tamang',
		'Address' =>'KTM' ,
		'Number' => '98665588715' ,
		'Email' => 'Sandesht801@gmail.com', );
	echo '<pre>';
	print_r($info);
	echo 'My name is '.$info['name'];
    echo "<br>";
	foreach ($info as $key => $value) {
		echo $key.' is ' . $value .'<br/>';
	}
?>