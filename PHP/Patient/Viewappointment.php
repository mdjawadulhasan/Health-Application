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



?>


<!DOCTYPE html>
<html>

<body>
    <header id="main-header">
        <div class="container">
            <h1>Hello Patients profile </h1>
            <h1>Welcome to Personal Health Application</h1>
            <h1>VIEW APPOINTMENT</h1>

        </div>
    </header>
    <nav id="navbar">
        <div class="container">
            <ul>
                </header>

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
    <table border="1">
        <tr style="background-color:#81D3BD">
            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Appointment Date</th>
            <th>Delete</th>

        </tr>


        <?php
        $user_name = $_SESSION["user_name"];
        $query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {

            $ptid = $row['pid'];
        }
        


        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT *FROM appointmenttbl where patientid='$ptid'";
        $result = mysqli_query($conn, $query);

        while ($r = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><center>' . $r['apdtname'] . '</center></td>';
            echo '<td><center>' . $r['apptname'] . '</center></td>';
            echo '<td><center>' . $r['appdate'] . '</center></td>';
            echo "<td><a href=\"Aptdelete.php?aptid=$r[aptid]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";
        }
        ?>

    </table>

</body>

</html>