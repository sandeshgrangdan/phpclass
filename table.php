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
	?>
	<table border="1" align="center" width="100%">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Number</th>
			<th>Email</th>
			<th>Gender</th>
			
		</tr>
		
		<?php $i =1; foreach ($info as  $value) { ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['Address']; ?></td>
					<td><?php echo $value['Number']; ?></td>
					<td><?php echo $value['Email']; ?></td>
				</tr>
		<?php } ?>

	</table>
