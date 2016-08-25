<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>

	<div class="container">
	<h1>PHP CRUD Grid</h1>
	<!-- <div class="container"> -->

<table>

	<thead>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>MOBILE</td>
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
				<td><a href="see.php?id=<?php echo $row['id'] ?>">see</a></td>

				</tr>

			<?php
			}
		}
		 ?>
		<a href="add.php">Create</a>
	</tbody>
</table>
</div>
</body>
</html>
 <style type="text/css">
 	table{
 		border:1px solid lightgrey;
 		/*border-radius: 5px;*/
 	}
 		td{
 			border:1px solid lightgrey;
 			width: 300px;	
 		}
 		a{

 			background-color: yellow;
 		}
 	
 </style>