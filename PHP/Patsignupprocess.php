<?php
echo ' <h1><center>Hello Patient</center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
echo ' <h1><center>Give your information</center></h1>';

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


    $conn = mysqli_connect('localhost','root','','phawa');
    $sql="INSERT INTO patienttbl(pid,ptname,ptphone,ptgender,ptage,ptbgrp,ptusername,ptpass,ptuseremail) VALUES ('0','$name','$phoneno','$gender','$age','$Bgrp','$user_name','$user_pass','$user_email')";
    
    if(mysqli_query($conn,$sql))
    {
        echo 'I am working';
        session_start();
        $_SESSION["user_name"]=$_POST["user_name"];
        echo "Signup Done Bro !";
        mysqli_close($conn);

    }
    else
    {
        echo "Signup is not Done Bro !";
    }

}
?>
