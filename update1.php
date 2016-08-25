<?php 
include 'config.php';


if(isset($_POST['submit'])){
	$ad = $_POST['ad'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$id = $_POST['id'];
	
	$sql4= "UPDATE crud SET name='$ad', email='$email', mobile='$mobile' WHERE id='$id'";
	print_r('<pre>');
	print_r($sql4);
	 print_r('</pre>');
	$query4=mysqli_query($conn,$sql4);

if ($query4){
	header('Location:show.php');
}
}
 ?>
