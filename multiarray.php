<?php
$info =   array(
	array(
		'name' => 'Sandesh Tamang',
		'Address' =>'KTM' ,
		'Number' => '98665588715' ,
		'Email' => 'Sandesht801@gmail.com',
		'gender' => 'Male', 
	),
	array(
		'name' => 'Safal Tamang',
		'Address' =>'KTM' ,
		'Number' => '98665588715' ,
		'Email' => 'Safal801@gmail.com',
		'gender' => 'Male',
	)
	);

  foreach ($info as $key => $value) {
  	echo $value. '<br/>';
  }
?>

<table border="1" align="center" width="100%">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Number</th>
			<th>Email</th>
			<th>Gender</th>
			
		</tr>
		<tr>
			<td><?php echo $info[0]['name'];?></td>
			<td><?php echo $info[0]['Address'];?></td>
			<td><?php echo $info[0]['Number'];?></td>
			<td><?php echo $info[0]['Email'];?></td>
			<td><?php echo $info[0]['gender'];?></td>
		</tr>
		<tr>
			<td><?php echo $info[1]['name'];?></td>
			<td><?php echo $info[1]['Address'];?></td>
			<td><?php echo $info[1]['Number'];?></td>
			<td><?php echo $info[1]['Email'];?></td>
			<td><?php echo $info[1]['gender'];?></td>
		</tr>
	</table>


