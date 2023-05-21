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

                    <li class="nav-item" onClick="location.href='Map.php'"></Button>
                        <a class="nav-link" href="#booking">Hospital-Map</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#reviews">Testimonials</a>
                    </li>

                    <li class="nav-item" onClick="location.href='MedikitHealthCare.php'"></Button>
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php
                            session_start();
                            if(isset($_SESSION['flag'])) {
                                if($_SESSION['flag'] == 'Login'){
                        ?>

                        
                    <a class="navbar-brand d-none d-lg-block" href="MedikitHealthCare.php">
                        Medikit
                        <strong class="d-block">Health Care</strong>
                    </a>

                        <li class="nav-item"onClick="location.href='appoint.php'"> <a class="nav-link" href="#Book">Book Appointment</a>
                         </li>
                        
                         <li class="nav-item" onClick="location.href='booked.php'"></Button>
                        <a class="nav-link" href="#timeline">Show-Appointment</a>
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


    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

    
    <!-- <div class="container mt-4 p-4">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center my-4"> </h2> -->
                <h2 class="text-center mb-lg-3 mb-2">Book Appointment</h2>

                <form onsubmit="showMsg(0);return false;" method="post" class="sky-form sky-changes-3" autocomplete="off" action="appointment.php">
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4">
                            Patient Name
                        </label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                      <!---->
                    <div class="form-group row">
                         <label class="col-sm-4 col-lg-4"> Email</label>
                        <div class="col-sm-8 col-lg-8">
                        <input type="email" name="email" id="email"  class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4">
                            Mobile Number
                        </label>
                        <div class="col-sm-8 col-lg-8">
                        <input type="number" name="number" id="number" class="form-control" placeholder="123" required>
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4">
                            Symptoms
                        </label>
                        <div class="col-sm-8 col-lg-8">
                            <textarea 								 type="text" name="purpose_of_message"  id = "purpose_of_message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <!----->
                    <div class="form-group row">
                    <label class="col-sm-4 col-lg-4">
                            Department
                        </label>
                        <div class="col-sm-8 col-lg-8">
							<label class="select">
								<select name="department" required>
									<option selected disabled>Select Department</option>
									<option value="Cardiology">Cardiology</option>
									<option value="Dermatology and Cosmetology">Dermatology and Cosmetology</option>
									<option value="General Surgery">General Surgery</option>
									<option value="Health Checkup Packages">Health Checkup Packages</option>
									<option value="Neurology">Neurology</option>
							</select>
                        </div>
						</label>
                    </div>
                    <!---->
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-4">
                            Date
                        </label>
                        <div class="col-sm-8 col-lg-8">
                            <input type="date" name = "date" id="date" class="form-control">
                        </div>
                    </div>
                    <!---->
                    <div class="form-group row">
                    <label class="col-sm-4 col-lg-4">
                            Time
                        </label>
                        <div class="col-sm-4 col-lg-4">
                            <select name="time" required>
									<option selected disabled>Select Time</option>
									<option value="8 AM-10 AM">8 AM-10 AM</option>
									<option value="10 AM-12 PM">10 AM-12 PM</option>
									<option value="12 PM-2 PM">12 PM-2 PM</option>
									<option value="2 PM-4 PM">2 PM-4 PM</option>
									<option value="4 PM-6 PM">4 PM-6 PM</option>
									<option value="6 PM-8 PM">6 PM-8 PM</option>
									<option value="8 PM-10 PM">8 PM-10 PM</option>
								</select>
                       
                        </label>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" . id="submit-button">Confirm</button> 
                                    
                                </div>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
    <!-- JAVASCRIPT FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>