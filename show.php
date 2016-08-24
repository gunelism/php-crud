<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>email</td>
			<td>mobile</td>
		</tr>
	</thead>
	<tbody>
		<?php 
		include 'config.php';
		$sql1 = "SELECT * FROM crud";
		$query1 = mysqli_query($conn,$sql1);

		if ($query1) {

			while ($row = mysqli_fetch_assoc($query1)){
				?>

				<tr>

				<?php
					foreach ($row as $key => $value) {
						echo "<td> $value </td>";
					}
				?>
				<td><a href="delete.php?id=<?php echo $row['id'] ?>">delete</a></td>
				<td><a href="update.php?id=<?php echo $row['id'] ?>">update</a></td>

				</tr>

			<?php
			}
		}
		 ?>

	</tbody>
</table>

</body>
</html>
 <style type="text/css">
 	table{
 		border:1px solid black;
 	}
 		td{
 			border:1px solid black;
 		}
 	
 </style>