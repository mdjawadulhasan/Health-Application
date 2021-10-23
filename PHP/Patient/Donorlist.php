<style>
    <?php

    include "design.css";
    ?>
</style>
<?php

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

    <title>Document</title>
</head>

<body>


    <header id="main-header">
        <div class="container">
        <h1>Hello Patient</h1>
        <h1>Welcome to Personal Health Application</h1>
        <h1>DONOR LIST</h1>
        </div>
    </header>

    <nav id="navbar">
        <div class="container">
            <ul>

                <li style="text-align:left"><a href="http://localhost/phawa/php"><b>&#8803;&nbsp; HOME<b></a></li>


                <li> <a href="Bookappointment.php">Book Appointment</a></a></li>
                <li> <a href="Viewappointment.php">view Appointment</a></a></a></li>
                <li> <a href="Seepresc.php">See Prescription</a></a></li>
                <li> <a href="Donorlist.php">Donorlist</a></a></li>
                <li><a href="Pateditprofile.php">Edit</a></a></li>
                <li><a href="Patprofile.php">Profile</a></a></li>
                <li><a href="Patlogout.php">Logout</a></a></li>




            </ul>
        </div>
    </nav>
    <br>

    <b>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <label for="Search">Seacrh By Blood Group: </label>
            <input type="text" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>" required>
            <button type="submit" name="submit">Search</button><br><br><b>

        </form>


        <table border="1">
            <tr style="background-color:#81D3BD">
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