<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>You are logged in now</center></h1>';

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    
    <a href="AddDonor.php">Manage Donor</a>
    <br>
    <a href="ManagePat.php">Manage Patient</a>
    <br>
    <a href="Adminlogout.php">Logout </a>


    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $query = "SELECT * from patienttbl";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    $query = "SELECT * from donortbl";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count2 = mysqli_num_rows($result);
    ?>

    <br>
    <br>
    <h1>Number of Patients :  <?php echo $count ?></h1>
    <h1>Number of Donors   :  <?php echo $count2 ?></h1>
   

</body>

</html>