<?php 
include 'config.php';
	$id = $_GET['id'];

	$sql5 = "SELECT  `name`, `email`, `mobile` FROM `crud` WHERE id='$id'";
	$query5=mysqli_query($conn,$sql5);
	$row=mysqli_fetch_assoc($query5);
	// print_r("<pre>");
	// print_r($row['name']);
	// print_r("<pre>");



	$ad = $row['name'];
	$email = $row['email'];
	$mobile = $row['mobile'];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 		<link rel="stylesheet" type="text/css" href="bootstrap.css">

 </head>
 <body>
 <div class="container">
 	<table>

 			<tr><td>Name :</td><td><?=" $ad"?></td></tr>
 			<tr><td>Email :</td><td><?=" $email"?></td></tr>
 			<tr><td>Mobile :</td><td><?=" $mobile"?></td></tr>
 			
 
 	</table>
 	<a href="show.php">Back</a>
 </div>
 </body>
 </html>
 <style type="text/css">
 	tr{
 		margin: 10px;
 		border: 1px solid lightgrey;

 		height: 50px;
 	}
 	td{
 		 		border: 1px solid lightgrey;

 		width: 100px;
 	}
 </style>