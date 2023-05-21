<?php
    session_start();

    $user_email = $_SESSION['email'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $purpose_of_message = $_POST['purpose_of_message'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'newdoctor');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    }else{

        $sql = "SELECT * FROM book_appointment WHERE date='$date' AND time='$time' AND department='$department'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            die('This department Doctor is already booked at this date and time.');
        } else {
            $contact = $conn->prepare("insert into book_appointment(user_email, name, email, number, purpose_of_message, department , date , time ) values(?, ?, ?, ?, ?, ? , ? , ?)");
            $contact->bind_param("ssssssss", $user_email,  $name, $email, $number,  $purpose_of_message, $department , $date , $time);
            $contact->execute();
            //echo"your message is send successfully....";
            echo ("<script LANGUAGE='JavaScript'>
                 window.alert('your message is send successfully...');
                   window.location.href='http://localhost/New-Appointment-System/MedikitHealthCare.php';
                </script>");
            $contact->close();
            $conn->close();
            //header("Location: http://localhost/Doctor-Appointment-System/booked.php");
            exit();
        }
    }