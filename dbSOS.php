<?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $time= $_POST['time'];
    $phone= $_POST['phone'];


    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'newdoctor');
    
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    }
    
    else {
                $reg = $conn->prepare("insert into sos(name, email, time, phone) values(?, ?, ?, ?)");
                $reg->bind_param("sssi", $name, $email, $time, $phone);
                $reg->execute();

                echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Your information is stored Successfully $name');
                   window.location.href='SOSform.php';
                </script>");

                $reg->close();
                $conn->close();
               // header("Location: http://localhost/Doctor-Appointment-System/Login.php");
                
                exit();
            }
?>