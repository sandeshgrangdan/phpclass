<?php
	$info =   array(
	array(
		'name' => 'Sandesh Tamang',
		'rol' =>'8085' ,
		'wt' => 40 ,
		'rts' => 14,
		'ecom' => 10,
		'com' => 30,
		'net' => 40,
		'se' => 20,
	),
	array(
		'name' => 'Dikesh Prajapati',
		'rol' =>'8075' ,
		'wt' => 45 ,
		'rts' => 14,
		'ecom' => 10,
		'com' => 30,
		'net' => 60,
		'se' => 20,
	),
	
	);
	?>
	<table border="1" align="center" width="100%">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Roll no:</th>
			<th>Web Tech</th>
			<th>RTS</th>
			<th>E-com</th>
			<th>Compiler</th>
			<th>Net-Centric</th>
			<th>SE</th>
			<th>Total</th>
			<th>Percent</th>
			<th>Division</th>
			
		</tr>
		
		<?php $i =1; foreach ($info as  $value) { ?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['rol']; ?></td>
					<td><?php echo $value['wt']; ?></td>
					<td><?php echo $value['rts']; ?></td>
					<td><?php echo $value['ecom']; ?></td>
					<td><?php echo $value['com']; ?></td>
					<td><?php echo $value['net']; ?></td>
					<td><?php echo $value['se']; ?></td>
					<td><?php
							 $total = $value['wt']+$value['rts']+$value['se']+$value['ecom']+$value['com']+$value['net'];
							echo $total;
					    ?>	
					</td>
					<td><?php
						$p = $total/600*100;
							echo $p.'%';
					    ?>	
					</td>
					<td><?php
						if(  $total/600*100<40 )
							echo 'Third Division';
						else  if( $total/600*100 < 60)
							echo 'Second Division';
						else if ( $total/600*100 <80 ) 
							echo "First Division";
						else
							echo "Distinction";
					    ?>	
					</td>
				</tr>
		<?php } ?>

	</table>
