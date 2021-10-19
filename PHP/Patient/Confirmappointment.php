<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patprofile.php");
    exit();
}
$user_name = $_SESSION["user_name"];
$query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $patname = $row['ptname'];
    $patid=$row['pid'];
}

?>





<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $AptDate = $_POST['aptdate'];
        $Dtrname = $_POST['dtrname'];
        $Dtrid = $_POST['dtrid'];

        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $sql="INSERT INTO appointmenttbl(aptid,doctorid,patientid,apdtname,apptname,appdate) VALUES ('0','$Dtrid',$patid,'$Dtrname','$patname','$AptDate')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Appointment Has been Set!")</script>';
            header("refresh: 0; url=Bookappointment.php");
            mysqli_close($conn);
        } else {
            echo "Signup is not Done Bro !";
        }
    }
}

?>