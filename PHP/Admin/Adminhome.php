<style>
    <?php

    include "design.css";
    ?>
</style>




<?php



session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <header id="main-header">
        <div class="container">
        <h1>Welcome Admin</h1>
        </div>
    </header>

    <nav id="navbar">
        <div class="container">
            <ul>
                <li style="text-align:left"><a href="http://localhost/phawa/php"><b>&#8803;&nbsp; HOME<b></a></li>
                <li><a href="AddDonor.php">Manage Donor</a></li>
                <li><a href="ManagePat.php">Manage Patient</a></li>
                <li><a href="ManageDoctor.php">Manage Doctor</a></li>
                <li> <a href="Adminlogout.php">Logout </a></li>
            </ul>
        </div>
    </nav>




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


    $query = "SELECT * from doctortbl";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count3 = mysqli_num_rows($result);


    ?>

    <br>
    <br>
    <h1>Number of Patients : <?php echo $count ?></h1>
    <h1>Number of Donors : <?php echo $count2 ?></h1>
    <h1>Number of Doctors : <?php echo $count3 ?></h1>



</body>

</html>