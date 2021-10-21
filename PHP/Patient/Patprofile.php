<style>
    <?php

    include "design.css";
    ?>
</style>




<?php

session_start();

if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=patindex.php");
    exit();
} else {

    $user_name = $_SESSION["user_name"];
    $query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['ptname'];
        $phoneno = $row['ptphone'];
        $gender = $row['ptgender'];
        $age = $row['ptage'];
        $Bgrp = $row['ptbgrp'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    <header id="main-header">
        <div class="container">


            <h1>Hello Patients profile </h1>
            <h1>Welcome to Personal Health Application</h1>
        </div>
    </header>



    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="Patlogout.php">Logout</a></a></li>

                <li><a href="Pateditprofile.php">Edit</a></a></li>

                <li> <a href="Donorlist.php">Donorlist</a></a></li>

                <li> <a href="Bookappointment.php">Book Appointment</a></a></li>
                <li> <a href="Viewappointment.php">view Appointment</a></a></a></li>
                <li> <a href="Seepresc.php">See Prescription</a></a></li>

            </ul>
        </div>
    </nav>


    <p><b>Name :<b><?php echo $name ?></p>
    <p><b>Phone No :<b><?php echo $phoneno ?></p>
    <p><b>Gender :<b><?php echo $gender ?></p>
    <p><b>Age :<b><?php echo $age ?></p>
    <p><b>Blood group :<b><?php echo $Bgrp ?></p>


</body>

</html>