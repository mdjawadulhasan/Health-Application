<?php
echo ' <h1><center>Hello Patients profile </center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=patindex.php");
    exit();
}


function ShowDonor($sql)
{
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $query = $sql;
    $result = mysqli_query($conn, $query);
  

    while ($r = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td><center>' . $r['dnrname'] . '</center></td>';
        echo '<td><center>' . $r['dnrphone'] . '</center></td>';
        echo '<td><center>' . $r['dnrbrgp'] . '</center></td>';
        echo '<td><center>' . $r['dnrcity'] . '</center></td>';
        echo '<td><center>' . $r['dnrarea'] . '</center></td>';
        echo '</tr><center>';
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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="Search">Seacrh By Blood Group: </label>
        <input type="text" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>" required>
        <button type="submit" name="submit">Search</button><br><br>

    </form>

    <a href="Patlogout.php">Logout</a><br>
    <a href="Pateditprofile.php">Edit</a><br>
    <a href="Donorlist.php">Donorlist</a><br>
    <a href="Bookappointment.php">Book Appointment</a><br>
    <a href="Viewappointment.php">view Appointment</a>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone No</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Area</th>


        </tr>

        <?php
        if (isset($_POST["submit"])) {
            $Blodgrp = $_POST['search'];
            $qry = "SELECT * FROM donortbl WHERE dnrbrgp like '%$Blodgrp%'";
            ShowDonor($qry);
        } else {
            $qry = "SELECT *FROM donortbl";
            ShowDonor($qry);
        }
        ?>


    </table>
</body>

</html>