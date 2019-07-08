<?php
session_start();
	if(!isset($_SESSION['username'])) { 
		echo 'No Log In';
	}else{
		if(isset($_POST['id_produkti']))
			$id_produkti= $_POST['id_produkti'];
		$username = $_SESSION['username'];
	$db = mysqli_connect("localhost","root","","mobilestore");
	$queryUser = "select id_klienti from klienti where uname = '$username';";
	$resultUser = mysqli_query($db,$queryUser);
	$user = mysqli_fetch_array($resultUser);
	$queryShto = "DELETE FROM `mobilestore`.`shporta` WHERE `id_klienti`='$user[id_klienti]' and id_produkti = '$id_produkti';";
	$resultShto = mysqli_query($db,$queryShto);
	}
?> 