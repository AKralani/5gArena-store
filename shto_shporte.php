<?php
session_start();
	if(!isset($_SESSION['username'])) { 
		echo 'No Log In';
	}else{
	$username = $_SESSION['username'];
	
	$db = mysqli_connect("localhost","root","","mobilestore");
	if(isset($_POST['id_produkti']))
		$id_produkti = $_POST['id_produkti'];
	
	$queryUser = "select id_klienti from klienti where uname = '$username';";

	$result=mysqli_query($db,$queryUser);
	$user = mysqli_fetch_array($result);
				 
	$queryShto = "INSERT INTO `mobilestore`.`shporta` (`id_produkti`, `id_klienti`) VALUES ('$id_produkti', '$user[id_klienti]');";
	$resultShto = mysqli_query($db,$queryShto);
	
	$queryShporte = "UPDATE `mobilestore`.`produkti` SET `shporte`='1' WHERE `id_produkti`='$id_produkti';";
	$resultShto = mysqli_query($db,$queryShporte);
	
	}
	//echo $query;
	//$result=mysqli_query($db,$query);
	//$row = mysqli_fetch_array($result);
	
?>