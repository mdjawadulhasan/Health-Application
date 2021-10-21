<?php

$dtid=$_GET['dtid'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$sql = "DELETE FROM doctortbl where dtid='$dtid'";

if (mysqli_query($conn, $sql)) {
    header("location:ManageDoctor.php");
    mysqli_close($conn);
} else {
    echo '<script>alert("Try Again!")</script>';
}


?>
