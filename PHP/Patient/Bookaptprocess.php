<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patprofile.php");
    exit();
}




$dtid = $_GET['dtid'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$query = "SELECT * FROM doctortbl WHERE dtid='$dtid';";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $dtname = $row['dtname'];
    $degree = $row['dtdegree'];
    $dept = $row['dtdept'];
    $chamber = $row['dtchamber'];
    $vtime = $row['dtvisitingtime'];
    $vdays = $row['dtvisitingdays'];
    $phnno = $row['dtphone'];
    $user_email = $row['dtemail_id'];
    $Doctorid=$row['dtid'];
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

    <p>Name :<?php echo $dtname ?></p>
    <p>Degree :<?php echo   $degree ?></p>
    <p>Department :<?php echo $dept ?></p>
    <p>Chamber :<?php echo $chamber ?></p>
    <p>Visiting Time :<?php echo  $vtime ?></p>
    <p>Visiting Days :<?php echo   $vdays ?></p>
    <p>Phone No :<?php echo  $phnno ?></p>
    <p>Mail id :<?php echo  $user_email ?></p>

    <form action="Confirmappointment.php" method="post">


        <input type="hidden"  name="dtrname" value="<?php echo $dtname; ?>">
        <input type="hidden"  name="dtrid" value="<?php echo $dtid; ?>">
        <label for="birthday">SET APPONTMENT DATE:</label>
        <input type="date" name="aptdate">
        <br>
        <button type="submit" name="submit">SET</button><br><br>

    </form>


</body>

</html>



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
            header("refresh: 0; url=Patprofile.php");
            mysqli_close($conn);
        } else {
            echo '<script>alert("Try Again!")</script>';
        }
    }
}

?>