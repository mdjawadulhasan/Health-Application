<?php
echo ' <h1><center>Hello Patients profile </center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>Name :<?php echo $name ?></p>
    <p>User Name :<?php echo $user_name ?></p>
    <p>Degree :<?php echo   $degree ?></p>
    <p>Department :<?php echo $dept ?></p>
    <p>Chamber :<?php echo $chamber ?></p>
    <p>Visiting Time :<?php echo  $vtime ?></p>
    <p>Visiting Days :<?php echo   $vdays ?></p>
    <p>Phone No :<?php echo  $phnno ?></p>
    <p>Mail id :<?php echo  $user_email ?></p>


    <a href="Patlogout.php">Logout</a>
    <a href="Pateditprofile.php">Edit</a>

</body>

</html>