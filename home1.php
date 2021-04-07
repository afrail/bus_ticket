<!DOCTYPE html>
<html>

<head>
    
      <title>  bus ticket </title>
    
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

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark"style="background-color: #483D8B" class="fixed-top">
			<i class="fas fa-bus"></i>
			<a class="navbar-brand" href="index.php">Online<span style="color: #DDA0DD;margin-left: 5px;">Ticket</span></a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggle-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav ml-auto">
					
						<a class="nav-link" href="home1.php">Home <span class="sr-only">(current)</span></a>
						
				    
					    <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="home.php">PurchaseTicket <span class="sr-only">(current)</span></a>
						<a class="nav-link" href="logout.php" style="margin-left:100px;color:red">LogOut <span class="sr-only">(current)</span></a>
					
					    
						
				</ul>
				
			</div>
		</nav>
 
                
                <div class="container bg-light col-11" style="margin-top:20px;">
        </div>
        <div class="container col-12 " style="max-height: 350px">
            <div id="myCarousel" class="carousel slide col-12" style="max-height: 350px" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                     <img src="img/home2.jpg" alt="Chicago" style="width:200% ;  max-height: 450px">
                    </div>

                    <div class="item">
                       <img src="img/homw1.jpg" alt="Los Angeles" style="width:100% ; max-height: 550px">
                    </div>

                    <div class="item">
                        <img src="img/bus.JPEG" alt="New york" style="width:100% ;  max-height: 450px">
                    </div>
                    <div class="item">
                        <img src="img/home2.jpg" alt="york" style="width:200% ;  max-height: 350px">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        

        <div class="row mt-5 ">


          
      
        <div class="footer bg-light text-center h1 font-weight-lighter font">Copyright &copy; 2019 Afrail. All Rights Reserved</div>

        <!--Modal-->
        <!--Modal Login-->

        <div class="container">
            <!-- The Modal -->
            <div class="modal fade" id="loginmodal" tabindex="-1" data-keyboard="true" data-backdrop="static">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h1 class="modal-title">Login</h1>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="inputUserName">User Name</label>
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="bg-primary">Login</button>
                            <button class="bg-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Modal Registration-->

        <div class="container">
            <!-- The Modal -->
            <div class="modal fade" id="registrationModal" tabindex="-1" data-keyboard="true" data-backdrop="static">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h1 class="modal-title">Registration</h1>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="inputUserName">User Name</label>
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="inputConfirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="bg-primary"  data-target="#loginmodal" data-toggle="modal" data-dismiss="modal">Login</button>
                            <button class="bg-primary">Submit</button>

                            <button class="bg-primary " data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

</body></html>


