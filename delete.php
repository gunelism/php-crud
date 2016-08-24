<?php 
include 'config.php';
$sil = $_GET['id'];

$sql2 = "DELETE FROM crud WHERE id=$sil";
$query2 = mysqli_query($conn,$sql2);

if($query2){
		header('Location:show.php');
	}

 ?>