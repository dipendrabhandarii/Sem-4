<?php
session_start();
if(isset($_SESSION['name']))
{?>
<table border="1" cellspacing="0" cellpdding="0">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>roll</th>
			<th>email</th>
			<th>Salary</th>
			<th>gender</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include("connection.php");
		$sql="select * from web";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0){
			
			while($row=mysqli_fetch_assoc($res)){
				//print_r($row);
				$sn=1;
				echo"<tr>";
				echo"<td>".$sn."</td>";
				echo"<td>".$row['name']."</td>";
				echo"<td>".$row['roll']."</td>";
				echo"<td>".$row['email']."</td>";
				echo"<td>".$row['Salary']."</td>";
				echo"<td>".$row['gender']."</td>";
				if($_SESSION['role']=='admin')
				{
				echo"<td><a href='edit.php?id=".$row['id']."'>Edit</a>||
				<a href='delete.php?id=".$row['id']."'>Delete</a></td>";}
				else
				echo "<td>N/A</td>";
				echo"</tr>";
			}
			$sn++;
		}
	?>
	</tbody>
	</table>
	<?php }?>