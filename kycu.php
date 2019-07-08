<?php			session_start();
				  $username=$_POST['username'];
				  $password=$_POST['password'];
				  				
	

	/*if($db = mysqli_connect("localhost","rooti","","mobilestore"))
		echo 'true';
	else */
	$db = mysqli_connect("localhost","root","","mobilestore");
	$query = "SELECT count(*) FROM mobilestore.klienti where uname='$username' and pass = '$password';";
	$result=mysqli_query($db,$query);
				 $row = mysqli_fetch_array($result);
	if($row[0] == '1'){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		echo 'sukses';
	}else{
		echo 'error, nuk keni casje';
	}
?>
