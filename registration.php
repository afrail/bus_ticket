<?php
include('config.php');

if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($link,$_POST['username']);
	$password = mysqli_real_escape_string($link,$_POST['password']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
	$cellnumber = mysqli_real_escape_string($link,$_POST['cellnumber']);
	
	
		$query = "INSERT INTO customar (c_id,c_name,c_phone,c_email,pass) VALUES ('','$username','$cellnumber','$email','$password')";
		$query1 = mysqli_query($link,$query);
	

		if($query1){
			header("location: index.php");
			echo("successful");
		}
		else{
			echo("Sorry dear something wrong");
		}
	
}

?>