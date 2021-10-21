<?php

$pid=$_GET['pid'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$sql = "DELETE FROM patienttbl where pid='$pid'";

if (mysqli_query($conn, $sql)) {
    header("location:Managepat.php");
    mysqli_close($conn);
} else {
    echo '<script>alert("Try Again!")</script>';
}


?>
