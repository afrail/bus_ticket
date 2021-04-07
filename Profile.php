<?php
    include('config.php');
	session_start();
	$email = $_SESSION['c_email'];
	$query = " SELECT * FROM customar WHERE c_email = '$email' ";
	$query1 =mysqli_query($link,$query);
	$query2 = mysqli_fetch_array($query1, MYSQLI_ASSOC);
	$name = $query2['c_name'];
	$email = $query2['c_email'];
	$phone = $query2['c_phone'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">
	<link rel="stylesheet" type="text/css" href="Header.css">
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin/css/bootstrap.css">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin/css/style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="admin/csss/all.css">
</head>
<body style="background-color:#7fb3d5">
	<header>
		
		<div>
			   <nav class="navbar navbar-expand-lg navbar-dark"style="background-color: #483D8B" class="fixed-top">
			<i class="fas fa-bus"></i>
			<a class="navbar-brand" href="index.html">Online<span style="color: #DDA0DD;margin-left: 5px;">Ticket</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav ml-auto">
					
						<a class="nav-link" href="home1.php">Home <span class="sr-only">(current)</span></a>
						
				    
					    <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="home.php">PurchesTicket <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="logout.php" style="margin-left:100px;color:red">LogOut <span class="sr-only">(current)</span></a>
					    
						
				</ul>
				
			</div>
		</nav>
		</div>
	</header>


	<main>
		<table>
			<tr>
				<td>
					<div class="image">
						<img src="img/aaa.jpg">
					</div>
				</td>

				<td valign="top">

					<table>
						<tr>
							<td style="font: 20px "><strong> Name</strong> </td> <td> : </td><td> <?php echo $name; ?> </td>
						</tr>
						<tr>
							<td> <strong> Address</strong> </td><td> : </td><td> Naogaon</td>
						</tr>
						<tr>
							<td> <strong> Phone</strong></td><td> : </td><td> <?php echo $phone; ?> </td>
						</tr>
						<tr>
							<td> <strong> Email</strong></td><td> : </td><td> <?php echo $email; ?> </td>
						</tr>
					</table>


				</td>
			</tr>
		</table>
		


	</main>



	<footer>
		
	</footer>

</body>
</html>



