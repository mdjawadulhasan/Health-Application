<?php

$aptid=$_GET['aptid'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$sql = "DELETE FROM appointmenttbl where aptid=$aptid";

if (mysqli_query($conn, $sql)) {
    header("location:Viewappointment.php");
    mysqli_close($conn);
} else {
    echo '<script>alert("Try Again!")</script>';
}


?>


