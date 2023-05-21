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

    <body id="top">
    
    <main>

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
                            <li class="nav-item active" onClick="location.href='Adminindex.php'"></Button>
                                <a class="nav-link" href="#hero">Home</a>
                            </li>

                            <?php
                            session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] == 'Admin'){
                        ?>
                        
                        <li class="nav-item" onClick="location.href='AllAppointment.php'"></Button>
                                <a class="nav-link" href="#booking">Appointment</a>
                            </li>
        
                            <li class="nav-item" onClick="location.href='logout.php'"></Button>
                                <a class="nav-link" href="#Logout">Logout</a>
                            </li>
                        <?php
                                }
                            }
                        ?> 
                    </ul>
                    </div>
                </div>
            </nav>

            <div class="container content-md team-v1">
		<h3 class="box2">All Appointments</h3>
		<ul class="list-unstyled row">
		<?php
			$email = $_SESSION["email"];

			$conn = new mysqli('localhost', 'root', '', 'newdoctor');
			if($conn->connect_errno){
				die('Connection Failed : '.$conn->connect_error);
			}else{
				$sql = "SELECT * FROM book_appointment ";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
		?>
		
						<li class="col-sm-6 col-xs-12" style="margin-bottom: 30px; background: #ffff;">
							<h4><span>Name - </span><?php echo $row['name'] ?></h4>
							<hr>
							<h4><span>Email - </span><?php echo $row['email'] ?></h4>
							<hr>
							<h4><span>Phone Number - </span><?php echo $row['number'] ?></h4>
							<hr>
							<h4><span>Purpose - </span><?php echo $row['purpose_of_message'] ?></h4>
							<hr>
							<h4><span>Department - </span><?php echo $row['department'] ?></h4>
							<hr>
							<h4><span>Date - </span><?php echo $row['date'] ?></h3>
							<hr>
							<h4><span>Time - </span><?php echo $row['time'] ?></h4>
							<!-- Update code -->
							<!-- <form onsubmit="showMsg(0);return false;" method="post"  action="../backend/admin/update.php" autocomplete="off"> 
								 <input type="hidden" name=update  id="update" value="<?php echo $row['id'] ?>">	 
								<button type="submit" class="btn btn-n">Update</button>
							</form>  -->

							<!-- Delete code -->
							<form onsubmit="showMsg(0);return false;" method="post"  action="delete.php" autocomplete="off">
								<input type="hidden" name=delete  id="delete" value="<?php echo $row['id'] ?>">	
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</li>

		<?php
					}
				}else{
					echo '<h3 class="text-center"> No Appointment here! </h3>' ;
				}
			}
		?>	
		</ul>
	</div>
</body>
</html>


