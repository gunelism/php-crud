<?php 
include 'config.php';


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	input{
		height: 30px;
		margin: 0 auto;
	}
</style>
<body>

<form action="" method="POST">
	<input type="text" name="ad" placeholder="adiniz"><br>
	<input type="text" name="email" placeholder="email"><br>
	<input type="number" name="mobile" placeholder="mobil"><br>
	<input type="submit" name="submit" value="gonder">
</form>

<?php 
if(isset($_POST['submit'])){
	$ad = $_POST['ad'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	$sql ="INSERT INTO crud(name, email, mobile) VALUES('$ad','$mail','$mobile')";
	$query = mysqli_query($conn,$sql);

	if($query) {
		header('Location: show.php');
	}else{
		echo "prosesde sehvlik var";
	} 
}
?>
</body>
</html>