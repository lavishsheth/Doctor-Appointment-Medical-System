<?php

    $delete= $_POST['delete'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'newdoctor');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $sql = "DELETE FROM book_appointment WHERE id='$delete'";

        if ($conn->query($sql) === TRUE) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Are you sure you want to delete ? ');
                   window.location.href='http://localhost/New-Appointment-System/AllAppointment.php';
                   window.alert('Record deleted successfully ');
                </script>");
        
        exit();
    }
        