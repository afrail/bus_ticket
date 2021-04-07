<?php
    include('config.php');

	session_start();
	$email = $_SESSION['c_email'];
	$query = " SELECT * FROM customar WHERE c_email = '$email' ";
	$query1 =mysqli_query($link,$query);
	$query2 = mysqli_fetch_array($query1, MYSQLI_ASSOC);
	$cId=$query2['c_id'];
	$name = $query2['c_name'];
	$email = $query2['c_email'];
	$phone = $query2['c_phone'];


	

?>

<?php

// $busnumber = $_GET['date'];
// $query3 = "SELECT * from bus WHERE bus_no='$busnumber' ";
// $query4 =mysqli_query($link,$query);
// $query5 = mysqli_fetch_array($query1, MYSQLI_ASSOC);
// $busname=$query5['bus_name'];
// $fare = $query5['fare'];
 if(isset($_POST["submited"])){

 	$query = "INSERT INTO sell (sell_id,c_id,bus_no) VALUES ('','$cId','$busnumber')";

	 $query1 = mysqli_query($link,$query);

 }
?>
<!DOCTYPE html>

<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OnlineTickets</title>
		<link rel="stylesheet" href="admin/css/bootstrap.min.css">
		<link rel="stylesheet" href="admin/css/style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="admin/csss/all.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>

	<body style="background-image:url(img/com.jpg);">
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark"style="background-color: #483D8B">
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

<div class="main" >
	<div class="container">
		<div class="col-sm-6 overflow">
			<div class="display">
		<h2 class="display-4 " style="color: white;">select Seat</h2>
		
	<div class="selectset">	
			<table>
				<tr style="background-color: white;">
					<td style="padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>A1</label> </td>				
					<td style="padding: 10px;"> <input type="checkbox" id="defaultUnchecked"><label>A2</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;" ><input type="checkbox" id="defaultUnchecked"> <label>B1</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>B2</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>C1</label> </td>
					<td style="background-color: none;padding: 10px;"><input type="checkbox"  id="defaultUnchecked"><label>C2</label> </td>
				</tr>

				<tr style="background-color: white;">
					
				<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>D1</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>D2</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>E1</label> </td>				
					<td style="padding: 10px;"> <input type="checkbox" id="defaultUnchecked"><label>E2</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;" ><input type="checkbox" id="defaultUnchecked"><label>F1</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>F2</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>G1</label> </td>
					<td style="background-color: none;padding: 10px;"><input type="checkbox"  id="defaultUnchecked"><label>G2</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>H1</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>H2</label> </td>
				</tr>

				<tr style="background-color: red;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>I1</label> </td>
					<td style="background-color: none;padding: 10px;"><input type="checkbox"  id="defaultUnchecked" value="A1"> <label>I2</label> </td>
				</tr>

				<tr style="background-color: red;">
					<td style="background-color: none; padding:10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>J1</label>  </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>J2</label> </td>
				</tr>

		     </table>	
	</div>	
	<div class="selectset2">		
			<table>
				<tr style="background-color: white;">
					<td style="padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>A3</label> </td>				
					<td style="padding: 10px;"> <input type="checkbox" id="defaultUnchecked"><label>A4</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;" ><input type="checkbox" id="defaultUnchecked"><label>B3</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>B4</label> </td>
				</tr>

				<tr style="background-color: red;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>C3</label> </td>
					<td style="background-color: none;padding: 10px;"><input type="checkbox"  id="defaultUnchecked"><label>C4</label> </td>
				</tr>

				<tr style="background-color: red;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>D3</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>D4</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"><label>E3</label> </td>				
					<td style="padding: 10px;"> <input type="checkbox" id="defaultUnchecked"><label>E4</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;" ><input type="checkbox" id="defaultUnchecked"> <label>F3</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>F4</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>G3</label> </td>
					<td style="background-color: none;padding: 10px;"><input type="checkbox"  id="defaultUnchecked"> <label>G4</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>H3</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>H4</label> </td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>I3</label> </td>
					<td style="background-color: none;padding: 10px;"><input type="checkbox"  id="defaultUnchecked"> <label>I4</label></td>
				</tr>

				<tr style="background-color: white;">
					<td style="background-color: none; padding:10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>J3</label> </td>
					<td style="background-color: none;padding: 10px;"> <input type="checkbox"  id="defaultUnchecked"> <label>J4</label> </td>
				</tr>

		     </table>
	</div>	
	</div>
	</div>
	</div>
</div>
 
 <div class="form">
 	
 	<table>
 	 <tr>

 	<td><strong>Customer Name</strong> </td> <td> : </td><td> <?php echo $name; ?></td>

 </tr>
 <tr>
 	<td><strong>Bus Number</strong> </td> <td> : </td><td> gh-1254</td>
 </tr>
 <tr>
 	<td><strong>Fare</strong> </td> <td> : </td><td> 400</td>
 </tr>
 <tr>
 	<td><button type="button" class="btn bg-info " name="submit" data-target="#loginmodal" data-toggle="modal">Confrim</button></td>
 	</tr>
 </table>

 </div>


<div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="loginmodal" tabindex="-1" data-keyboard="true" data-backdrop="static">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h1 class="modal-title">Payment</h1>
                        <button class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputUserName"><?php echo $name; ?></label></br>
                                
                           
                            
                                <label for="inputPassword"><?php echo $email; ?></label>

                                
                                <label for="inputUserName">Fare cost total:   480Tk</label>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Accont Number</label>
                                <input type="text" class="form-control"  name="Number">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="bg-primary">OK</button>
                        <button class="bg-primary" data-dismiss="modal">Cencel</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

		<script src="js/bootstrap.min.js"></script>
		<script src="jss/all.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
