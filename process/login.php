<?php

        require 'dbconfig.php';

        session_start();
        $staffId = $_POST['staffId'];
        $password = $_POST['password'];
        $staffId = stripcslashes($staffId);
        $password = stripcslashes($password);
        $staffId = mysqli_real_escape_string($conn,$staffId);
        $password = mysqli_real_escape_string($conn,$password);

        $_SESSION['user']= $staffId; 

        $query = "Select * from Staff where StaffID = '$staffId' and StaffPassword = '$password'";
        $result = mysqli_query($conn,$query);


        if($result === FALSE) { 
            die(mysqli_error($conn)); // TODO: better error handling
        }

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($row['StaffID'] == $staffId && $row['StaffPassword'] == $password){
            session_start();
            // $_SESSION["currUser"] = $row["id"];
            header("Location: /InternshipNilai/dashboard.php");
        }
        else{
            echo "<script>alert('Wrong id and password combinations. Please try again');
            document.location.href='/InternshipNilai';</script>";
        }