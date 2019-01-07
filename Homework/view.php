<?php
	require "connect.php";
	$sql ="select * from tbl_homework ";
	$data = array();
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while ($d = mysqli_fetch_assoc($result)) {
			array_push($data, $d);
		}

	}else
	  echo "No Data Found";
 ?>
 

 <table border="1" align="center">
 	<thead>
		<tr>
			<tr>
				 	<th>Id</th>
				 	<th>Name</th>
				 	<th>Username</th>
				 	<th>Status</th>
				 	<th>Gender</th>
				 	<th>Created date</th>
				 	<th>Action</th>
		    </tr>
			
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach ($data as  $d) { ?>
		<tr>
			<td><?php echo $i++;?></td>
			<td><?php echo $d['name'];?></td>
			<td><?php echo $d['username'];?></td>
			<td><?php echo $d['status'];?></td>
			<td><?php echo $d['gender'];?></td>
			<td><?php echo $d['date1'];?></td>
			<td><a href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Are You Want To Delete?')">Delete</a>
			<a href="edit.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Are You Want To Edit?')">Edit</a>
			</td>
 	
	</tbody>
	</table>