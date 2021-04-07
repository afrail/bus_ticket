<?php

include('config.php');

$schedule="";
$Busname="";
$Busno="";
$Fare="";
$From="";
$To="";
$Datetime="";
$Date="";

    $UpdateRecord=$_GET['Update'];
    $Show_Query="SELECT * FROM bus,schedules WHERE bus.bus_no=schedules.bus_no";
    $Execute=mysqli_query($link,$Show_Query);

 while($DataRows=mysqli_fetch_array($Execute,MYSQLI_ASSOC)){
           $schedule=$DataRows['bus_no'];  
           $Busname=$DataRows['bus_name'];
           $From=$DataRows['d_from'];
           $To=$DataRows['d_to'];
           $Fare=$DataRows['fare']; 
           $Datetime=$DataRows['d_time'];             /*When we Click on Update button The input field automatic will be fill*/
           $Date=$DataRows['d_date'];
           $Busno=$DataRows['bus_no'];
          
 }


if(isset($_POST["submited"])){

$busname=$_POST["busName"];
$from=$_POST["from"];
$to=$_POST["to"];       /* This Code Only for Update the database */
$fare=$_POST["fare"];
$d_time=$_POST["d_time"];
$d_date=$_POST["d_date"];

$query=mysql_query("UPDATE  product SET productName='$ProductName', brandName='$BrandName', quality='$Quality', unitPrice='$UnitPrice' WHERE productId='$ProductId'");

if($query){
header("location:aproduct.php");
echo'<script>alert("Successfully Inserted!");</script>';
}

else{
echo'<script>alert("Oops!Try Again Please");</script>';
 }
}



if(isset($_POST['submit'])){
	$busNumber = mysqli_real_escape_string($link,$_POST['busNumber']);
	$busName = mysqli_real_escape_string($link,$_POST['busName']);
    $from = mysqli_real_escape_string($link,$_POST['from']);
	$to = mysqli_real_escape_string($link,$_POST['to']);
	$d_time = mysqli_real_escape_string($link,$_POST['d_time']);
	$d_date = mysqli_real_escape_string($link,$_POST['d_date']);
	$fare = mysqli_real_escape_string($link,$_POST['fare']);
	
	 $query = "INSERT INTO bus (bus_id,bus_no,bus_name,fare) VALUES ('','$busNumber','$busName','$fare')";

	 $query1 = mysqli_query($link,$query);

     
     $query2 = "INSERT INTO schedules (schedule_id,d_time,d_from,d_to,d_date,bus_no) VALUES ('','$d_time','$from','$to','$d_date','$busNumber')";

     $query3 = mysqli_query($link,$query2);

		 if($query3 && $query1){
		 	header("location: add_home.php");
		 	echo 'successful' ;
		 }
		 else{
		 	echo("Sorry dear something wrong");
		 }
	
}

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OnlineTickets</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="csss/all.css">
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg  navbar-dark"style="background-color: #483D8B">
			<i class="fas fa-bus"></i>
			<a class="navbar-brand" href="index.html">Online<span style="color: #DDA0DD;margin-left: 5px;">Ticket</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarColor02">
				<ul class="navbar-nav ml-auto navbar-center">
				
					     <a class="nav-link" href="home1.php">Home <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="home.php">PurchesTicket <span class="sr-only">(current)</span></a>
					
					
				</ul>
				
			</div>
		</nav>

<div class="main" style="background-color:  #9a7d0a">
	<div class="container">
		<div class="col-sm-6 ">
			<div class="display">
		<h2 class="display-3">Add Bus </h2>
		
		<table class="tableback">
		<form method="post" action="">
		<tr>
			<td>Bus Number</td>
			<td><input type="text" name="busNumber" value="<?php echo $schedule; ?>" placeholder="BusNumber"></td>
		</tr>		
		<tr>		
		   <td> Bus Name</td>
		   <td><input type="text" name="busName" value="<?php echo $Busname;?>" placeholder="Enter your BusName"></td>	
        </tr>
        <tr>		
		   <td> From</td>
		   <td><input type="text" name="from" value="<?php echo $From; ?>" placeholder="Enter your Plase"></td>	
        </tr>
        <tr>		
		   <td> To</td>
		   <td><input type="text" name="to" value="<?php echo $To; ?>" placeholder="Enter your plase"></td>	
        </tr>
        <tr>		
		   <td> fare</td>
		   <td><input type="text" name="fare" value="<?php echo $Fare; ?>" placeholder="Enter your price"></td>	
        </tr>
        <tr>		
		   <td> Time</td>
		   <td><input type="text" name="d_time" value="<?php echo $Datetime; ?>" placeholder="Enter your Time"></td>	
        </tr>
        <tr>		
		   <td>Date</td>
			<td>
				<input type="date" value="<?php echo $Date; ?>" name="d_date">
           </td>
			
        </tr>
        <tr >		
		   <td > <button type="submit" name="submit" >ADD</button></td>
		   <td > <button type="submit" name="submited" >UPDATE</button></td>
        </tr>
		
		</form>
		</table>
	</div>
	</div>
	</div>
</div>


<footer class="fixed-bottom">
	<div class="footer">
            <div class="container">
                <div class="social-icon">
                    <div class="col-md-4">
                        <ul class="social-network">
                            <li><a href="https://www.facebook.com" class="fb tool-tip" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com" class="ytube tool-tip" title="You Tube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>     
        </div>
</footer>
