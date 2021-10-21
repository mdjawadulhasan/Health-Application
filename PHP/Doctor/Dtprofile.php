

<style>
<?php

   include "design.css";
?>
</style>

<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=Dtindex.php");
    exit();
} else {

    $user_name = $_SESSION["user_name"];
    $query = "SELECT * FROM doctortbl WHERE dtuser_name='$user_name';";
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['dtname'];
        $degree = $row['dtdegree'];
        $dept = $row['dtdept'];
        $chamber = $row['dtchamber'];
        $vtime = $row['dtvisitingtime'];
        $vdays = $row['dtvisitingdays'];
        $phnno = $row['dtphone'];
        $user_email = $row['dtemail_id'];
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
 <h1>Hello Doctors profile </h1>
<h1>Welcome to Personal Health Application</h1>
</div>
</header>

    <p><b>Name :<b><?php echo $name ?></p>
    <p><b>User Name :<b><?php echo $user_name ?></p>
    <p><b>Degree :<b><?php echo   $degree ?></p>
    <p><b>Department :<b><?php echo $dept ?></p>
    <p><b>Chamber :<b><?php echo $chamber ?></p>
    <p><b>Visiting Time :<b><?php echo  $vtime ?></p>
    <p><b>Visiting Days :<b><?php echo   $vdays ?></p>
    <p><b>Phone No :<b><?php echo  $phnno ?></p>
    <p><b>Mail id :<b><?php echo  $user_email ?></p>
<br>
    <button style="background-color:#04AA6D"><a href="Dtlogout.php"><b>Logout<b></a></button> &nbsp; &nbsp;
    <button style="background-color:#04AA6D"> <a href="Dteditprofile.php"><b>Edit<b></a></button><br><br>
    <button style="background-color:#04AA6D"> <a href="ProvidePrescr.php"><b>Give Prescrption<b></a></button><br><br>
   

</body>

</html>