<?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];


    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'newdoctor');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        if($cpassword == $password){
            $sql = "SELECT * FROM register WHERE email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                die('Your Email Already exist.');
            } else {
                $reg = $conn->prepare("insert into register(name, email, password) values(?, ?, ?)");
                $reg->bind_param("sss", $name, $email, $password);
                $reg->execute();

                echo ("<script LANGUAGE='JavaScript'>
                 window.alert('You have registered Successfully $name');
                   window.location.href='Login.php';
                </script>");

                $reg->close();
                $conn->close();
               // header("Location: http://localhost/Doctor-Appointment-System/Login.php");
                
                exit();
            }
        }else{
            die('Password not matched.');
        }
    }