<?php
echo ' <h1><center>Hello Patient</center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
echo ' <h1><center>Give your information</center></h1>';
$usernameInDB = $mailInDB = "";

if (isset($_POST["submit"])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $name = $fname . " " . $lname;
    $phoneno = $_POST['phnno'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $Bgrp = $_POST['Bgrp'];
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $user_email = $_POST['user_email'];


    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $sql = "INSERT INTO patienttbl(pid,ptname,ptphone,ptgender,ptage,ptbgrp,ptusername,ptpass,ptuseremail) VALUES ('0','$name','$phoneno','$gender','$age','$Bgrp','$user_name','$user_pass','$user_email')";

    if (isset($fname) && isset($lname) && isset($phoneno) && isset($gender) && isset($age) && isset($Bgrp) && isset($user_name) && isset($user_pass) && isset($user_email)) {

        //  $user_name = mysqli_real_escape_string($conn, $_POST['$user_name']);

        $query = "SELECT ptusername FROM patienttbl WHERE ptusername='$user_name';";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $usernameInDB = $row['ptusername'];
        }


        $query = "SELECT ptuseremail FROM patienttbl WHERE ptuseremail='$user_email'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $mailInDB = $row['ptuseremail'];
        }


        if ($usernameInDB == $user_name) {

            echo '<script>alert("User Name already available!,Try different User Name!")</script>';
            header("refresh: 0.5; url=Patsignup.php");
            mysqli_close($conn);
        } else  if ($mailInDB == $user_email) {
            echo '<script>alert("Mail address already exist !,Try different mail address!")</script>';
            header("refresh: 0.5; url=Patsignup.php");
            mysqli_close($conn);
        } else {
            if (mysqli_query($conn, $sql)) {
                echo 'I am working';
                session_start();
                $_SESSION["user_name"] = $_POST["user_name"];
                header("refresh: 1; url=patprofile.php");
                mysqli_close($conn);
            } else {
                echo "Signup is not Done Bro !";
            }
        }
    }
}
