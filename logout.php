<?php
    session_start();
  
    session_unset();
    
    session_destroy();

    header("Location: http://localhost/New-Appointment-System/MedikitHealthCare.php");
