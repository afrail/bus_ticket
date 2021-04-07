<?php
include('config.php');

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
