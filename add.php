
<?php 
include 'config.php';


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<style type="text/css">
	input{
		width: 300px; 
		height: 30px;
		margin: 0 auto;
	}
</style>
<body>
<div class="container">

<form action="" method="POST">
	<input type="text" name="ad" placeholder="adiniz"><br>
	<input type="text" name="email" placeholder="email"><br>
	<input type="number" name="mobile" placeholder="mobil"><br>
	<input type="submit" name="submit" value="gonder">
</form>
</div>
<?php 
if(isset($_POST['submit'])){
	$ad = $_POST['ad'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	if(!empty($ad) && !empty($email) && !empty($mobile)){
		$sql ="INSERT INTO crud(name, email, mobile) VALUES('$ad','$email','$mobile')";
		$query = mysqli_query($conn,$sql);

			if($query){
				header('Location: show.php');
			}else{
				echo "prosesde sehvlik var";
			}
		}
		else{
		// 	 $_SESSION['msj'] = 'Do not keep the input blank!';
			echo "'Do not keep the inputs blank!";
		} 
}	
?>
</div>
</body>
</html>