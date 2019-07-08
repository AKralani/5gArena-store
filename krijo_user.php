<?php


 if(isset($_POST['emri'])) 
	 $emri = $_POST['emri'];
  if(isset($_POST['mbiemri'])) 
	 $mbiemri = $_POST['mbiemri'];
  if(isset($_POST['email'])) 
	 $email = $_POST['email'];
  if(isset($_POST['username'])) 
	 $username = $_POST['username'];
  if(isset($_POST['password'])) 
	 $password = $_POST['password'];



$db = mysqli_connect("localhost","root","","mobilestore");
$query = "INSERT INTO `mobilestore`.`klienti` 
(`emri`, `mbiemri`, `email`, `uname`, `pass`) VALUES ('$emri', '$mbiemri', '$email', '$username', '$password');";
$result = mysqli_query($db,$query);

if($result)
	echo "sukses";
else
	echo "error";



?>