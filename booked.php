<html> 
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS FILES -->        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">

    </head>

<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="MedikitHealthCare.php">
                Medikit
                <strong class="d-block">Health Care</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">

                <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>

                    <a class="navbar-brand d-none d-lg-block" href="MedikitHealthCare.php">
                        Medikit
                        <strong class="d-block">Health Care</strong>
                    </a>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#reviews">Testimonials</a>
                    </li>

                    <li class="nav-item" onClick="location.href='registration.php'"></Button>
                        <a class="nav-link" href="#reviews">Registration</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php
                            session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] == 'Login'){
                        ?>
                        <li class="nav-item"onClick="location.href='appoint.php'"> <a class="nav-link" href="#Book">Book Appointment</a>
                         </li>
                        
                         <li class="nav-item"onClick="location.href='shopping-cart/index.php'"> <a class="nav-link" href="#Book">Medicare</a>
                         </li>
                         
                         <li class="nav-item"onClick="location.href='logout.php'"> <a class="nav-link" href="#logout">Logout</a>
                         </li>

                        <?php
                                }
                            }
                        ?> 
                </ul>
            </div>

        </div>
    </nav>

            </header>

	<div class="container content-md team-v1">
		<h3 class="box2">Your Appointments</h3>
		<ul class="list-unstyled row">
		<?php
			$email = $_SESSION["email"];

			$conn = new mysqli('localhost', 'root', '', 'newdoctor');
			if($conn->connect_errno){
				die('Connection Failed : '.$conn->connect_error);
			}else{
				$sql = "SELECT * FROM book_appointment WHERE user_email='$email'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
		?>
		
						<li class="col-sm-6 col-xs-6" style="margin-bottom: 30px; background: #ffff;">
							<h5><span>Name - </span><?php echo $row['name'] ?></h5>
							<hr>
							<h5><span>Email - </span><?php echo $row['email'] ?></h5>
							<hr>
							<h5><span>Phone Number - </span><?php echo $row['number'] ?></h5>
							<hr>
							<h5><span>Purpose - </span><?php echo $row['purpose_of_message'] ?></h5>
							<hr>
							<h5><span>Department - </span><?php echo $row['department'] ?></h5>
							<hr>
							<h5><span>Date - </span><?php echo $row['date'] ?></h5>
							<hr>
							<h5><span>Time - </span><?php echo $row['time'] ?></h5>
						</li>
		<?php
					}
				}
			}
		?>	
		</ul>
	</div>
</body>
</html>
