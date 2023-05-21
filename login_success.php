<?php
    $email = $_POST['email'];
    $password = $_POST['password'] ;

    session_start();
    
    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'newdoctor');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $sql = "SELECT * FROM register WHERE email= '$email' AND password= '$password' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            if (($email == 'admin@gmail.com' ) & ( $password == '1234')) 
            {
                $_SESSION["email"] = $email;
                $_SESSION["flag"] = 'Admin';

                echo ("<script LANGUAGE='JavaScript'> 
                 window.alert('You have logged Succesfully.... ');
                   window.location.href='http://localhost/New-Appointment-System/Adminindex.php';
                </script>");

                die('Admin login');
            } 
            else {
                $_SESSION["email"] = $email;
                $_SESSION["flag"] = 'Login';

                echo ("<script LANGUAGE='JavaScript'> 
                 window.alert('You have logged Succesfully.... ');
                   window.location.href='http://localhost/New-Appointment-System/MedikitHealthCare.php';
                </script>");
                //header("Location:'MedikitHealthCare.html'");
            }     
        } else {
            die('Invalid Email or Password.');
            
        }
    }