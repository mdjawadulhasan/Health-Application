<style>
<?php

   include "design.css";
?>
</style>

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
   
</head>

<body>
<header id="main-header">
 <div class="container">
 <h1>APPONTMENT SET PAGE</h1>
 
</div>
</header>



    <p><b>Name :<b><?php echo $dtname ?></p>
    <p><b>Degree :<b><?php echo   $degree ?></p>
    <p><b>Department :<b><?php echo $dept ?></p>
    <p><b>Chamber :<b><?php echo $chamber ?></p>
    <p><b>Visiting Time :<b><?php echo  $vtime ?></p>
    <p><b>Visiting Days :<b><?php echo   $vdays ?></p>
    <p><b>Phone No :<b><?php echo  $phnno ?></p>
    <p><b>Mail id :<b><?php echo  $user_email ?></p>

    <form action="Confirmappointment.php" method="post">


        <input type="hidden"  name="dtrname" value="<?php echo $dtname; ?>">
        <input type="hidden"  name="dtrid" value="<?php echo $dtid; ?>">
        <label for="birthday">SET APPONTMENT DATE:</label>
        <input type="date" name="aptdate"   required>
        <br>
        <button type="submit" name="submit"  style="background-color:#04AA6D">SET</button><br><br>

    </form>


</body>

</html>



