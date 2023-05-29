
<table border="1" cellspacing="0" cellpadding="0">
	 <thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>address</th>
			<th>phone</th>
			<th>college_id</th>
			</tr>
	</thead>
	<tbody>
		<?php
		include("connection1.php");
		$sql="select * from ncc_bim";
		$res=mysqli_query($connect,$sql);
		if(mysqli_num_rows($res)>0)
        {
			
			while($row=mysqli_fetch_assoc($res)){
				//print_r($row);
				$sn=1;
				echo"<tr>";
				echo"<td>".$sn."</td>";
				echo"<td>".$row['name']."</td>";
				echo"<td>".$row['email']."</td>";
				echo"<td>".$row['address']."</td>";
				echo"<td>".$row['phone']."</td>";
				echo"<td>".$row['college_id']."</td>";
				echo"</tr>";
				$sn++;
			}
			
		}
	?>
	</tbody>
	</table>
	