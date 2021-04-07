<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OnlineTickets</title>
		<link rel="stylesheet" href="admin/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin/css/style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="admin/csss/all.css">
	</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark"style="background-color: #483D8B" class="fixed-top">
			<i class="fas fa-bus"></i>
			<a class="navbar-brand" href="index.html">Online<span style="color: #DDA0DD;margin-left: 5px;">Ticket</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						
						<a class="nav-link" href="home.php">PurchesTicket <span class="sr-only">(current)</span></a>
					</li>
					<a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="home.php">PurchesTicket <span class="sr-only">(current)</span></a>
				</ul>
				
			</div>
		</nav>


		<div class="main" style="background-image: url(img/pngtree-Bus.jpg)">
	<div class="container">
		<div class="col-sm-9 ">
			<div class="display">
		<h2 class="display-4">Bus Schedule</h2>
		
		<div>
			<table class="tableback">
   <tr>
    <th>Bus Name</th>
    <th>Time</th>
    <!--<th>Aviable Seat</th>-->
    <th>Fare</th>
    <th> Details</th>
  </tr>


<?php
include('config.php');

  if(isset($_POST["submit"])){
  $from=$_POST['from'];
  $fromto=$_POST['fromto'];
  $date=$_POST['date'];

  $query="SELECT bus.bus_no,bus.bus_name,bus.fare,schedules.d_time FROM bus,schedules WHERE bus.bus_no=schedules.bus_no AND schedules.d_from='$from' AND schedules.d_to='$fromto'";

      $Execute=mysqli_query($link,$query);
     // header("location:busSchedule.php");


   //header("location:home.php");
  //include('config.php');

  while($row=mysqli_fetch_array($Execute, MYSQLI_ASSOC))
 {
  
  ?>
  <tr>
    <td><?php echo $row['bus_name']; ?></td>
    <td><?php echo $row['d_time']; ?></td>
    <td><?php echo $row['fare']; ?></td>

    <td><a type="button" class="btn btn-primary" href="seatSelect.php? date=<?php echo $row['bus_no']; ?>" >See Details</a></td>
  </tr>
<?php
 } 
}
?>
  

 

</table>
		</div>
	</div>
	</div>
	</div>
</div>

		<footer >
	<div class="footer">
            <div class="container">
                <div class="social-icon">
                    <div class="col-md-4">
                        <ul class="social-network">
                            <li><a href="https://www.facebook.com" class="fb tool-tip" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>     
        </div>
</footer>











		<script src="js/bootstrap.min.js"></script>
		<script src="jss/all.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>	
