<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>You are logged in now</center></h1>';

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
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

    <a href="Adminlogout.php">Logout</a>
    <br>
    <a href="AddDonor.php">Adddonor</a>

   

</body>

</html>