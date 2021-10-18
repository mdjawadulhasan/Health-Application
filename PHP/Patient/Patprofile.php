<?php
echo ' <h1><center>Hello Patients profile </center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
session_start();

if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=patindex.php");
    exit();
} else {

    $user_name = $_SESSION["user_name"];
    $query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['ptname'];
        $phoneno = $row['ptphone'];
        $gender = $row['ptgender'];
        $age = $row['ptage'];
        $Bgrp = $row['ptbgrp'];
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
   
    <p>Name        :<?php echo $name ?></p>
    <p>Phone No    :<?php echo $phoneno ?></p>
    <p>Gender      :<?php echo $gender ?></p>
    <p>Age         :<?php echo $age ?></p>
    <p>Blood group :<?php echo $Bgrp ?></p>
    

    <a href="Patlogout.php">Logout</a>
    <a href="Pateditprofile.php">Edit</a>
</body>

</html>