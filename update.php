<?php 
include 'config.php';
$id = $_GET['id'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];


$sql = "SELECT `name`, `email`, `mobile` FROM crud WHERE id=$id";
$query= mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($query);
print_r('<pre>');
print_r($row);
print_r('</pre>');


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="update1.php" method="POST">
	<input type="hidden" name="id" value="<?=$id?>"><br>

	<input type="text" name="ad" value="<?= $row['name']?>"><br>
	<input type="text" name="email" value="<?= $row['email']?>"><br>
	<input type="number" name="mobile" value="<?= $row['mobile']?>"><br>
	<input type="submit" name="submit" value="edit">
</form>

</body>
</html>
<style type="text/css">
	input{
		width: 300px;
		height: 30px;
		margin: 0 auto;
	}
</style>