<?php
include('config.php');
    session_start();
	$email = mysqli_real_escape_string($link,$_POST['email']);
	$password = mysqli_real_escape_string($link,$_POST['password']);
	
	 $query = "SELECT * FROM customar WHERE c_email='$email' AND pass='$password'";
 


	$query1 = mysqli_query($link,$query);
	$row = $query1->num_rows;
	if($row == 1){
		$_SESSION['c_email'] = $email;
		header("location: home1.php");
	}
	else{
		echo " <script>
					window.location = 'index.php';
					alert('Password or mail is incorrectr......!'); 
				</script>";
	}

?>