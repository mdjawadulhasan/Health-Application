<?php

$did=$_GET['did'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$sql = "DELETE FROM donortbl where did=$did";

if (mysqli_query($conn, $sql)) {
    header("location:AddDonor.php");
    mysqli_close($conn);
} else {
    echo '<script>alert("Try Again!")</script>';
}


?>