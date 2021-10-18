<?php
echo ' <h1><center>Hello Patients profile </center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
session_start();


if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=patindex.php");
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
    <p><?php echo $_SESSION["user_name"] ?></p>
    <a href="Patlogout.php">Logout</a>
</body>

</html>