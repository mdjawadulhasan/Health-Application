<style>
<?php

   include "design.css";
?>
</style>

<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Dtprofile.php");
    exit();
}

$patientid = $_GET['patientid'];
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$query = "SELECT * FROM patienttbl WHERE pid='$patientid';";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $ptname = $row['ptname'];
    $ptage = $row['ptage'];
    $ptbgrp = $row['ptbgrp'];
    $ptid=$row['pid'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   
</head>

<body>
<header id="main-header">
 <div class="container">
 <h1>Prescription Giving Page</h1>
 
</div>
</header>
<nav id="navbar">
    <div class="container">
<ul>
<li style="text-align:left"><a href="http://localhost/Health/"><b>&#8803;&nbsp; HOME<b></a></li> 
   
</ul>
</div>
</nav>


    <p><b>Name :<b><?php echo $ptname ?></p>
    <p><b>Age :<b><?php echo   $ptage ?></p>
    <p><b>Blood Group :<b><?php echo $ptbgrp ?></p>
    

    <form action="ConfirPresc.php" method="post">


        
        <input type="hidden"  name="ptid" value="<?php echo $ptid; ?>">

        <label for="apt">SET PRESCRIPTION DATE:</label>
        <input type="date" name="prescdate"   required>
        <br>
        <label for="Presc">Give Prescription:</label>
        <br>
        <textarea name="presctext" rows="10" cols="30" required>Provide the Prescription</textarea>
        <br>
        <button type="submit" name="submit"  style="background-color:#04AA6D">SET</button><br><br>

    </form>


</body>

</html>


