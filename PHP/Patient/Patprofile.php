<?php require_once 'header.php'; ?>




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



<section class="show">
    <b>Name :<b><?php echo $name ?>
    <p><b>Phone No :<b><?php echo $phoneno ?></p>
    <p><b>Gender :<b><?php echo $gender ?></p>
    <p><b>Age :<b><?php echo $age ?></p>
    <p><b>Blood group :<b><?php echo $Bgrp ?></p>
</section>








<?php require_once 'footer.php'; ?>