<style>
    <?php

    include "design.css";
    ?>
</style>


<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}


?>


<!DOCTYPE html>
<html>

<body>

    <header id="main-header">
        <div class="container">
            <h1>Welcome Admin</h1>
            <h1>Manage Doctor</h1>
        </div>
    </header>

    <nav id="navbar">
        <div class="container">
            <ul>
                <li style="text-align:left"><a href="http://localhost/Health/"><b>&#8803;&nbsp; HOME<b></a></li>
                <li><a href="AddDonor.php">Manage Donor</a></li>

                <li><a href="ManagePat.php">Manage Patient</a></li>

                <li><a href="ManageDoctor.php">Manage Doctor</a></li>

                <li> <a href="Adminlogout.php">Logout </a></li>
            </ul>
        </div>
    </nav>

    <br>
    <table border="1">
        <tr style="background-color:#81D3BD">
            <th>Name</th>
            <th>User Name</th>
            <th>Degree</th>
            <th>Department</th>
            <th>Chamber</th>
            <th>Phone No</th>
            <th>Mail ID</th>
            <th>&nbsp;&nbsp; &#128465 &nbsp;&nbsp;</th>

        </tr>



        <?php




        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT *FROM doctortbl";
        $result = mysqli_query($conn, $query);

        while ($r = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><center>' . $r['dtname'] . '</center></td>';
            echo '<td><center>' . $r['dtuser_name'] . '</center></td>';
            echo '<td><center>' . $r['dtdegree'] . '</center></td>';
            echo '<td><center>' . $r['dtdept'] . '</center></td>';
            echo '<td><center>' . $r['dtchamber'] . '</center></td>';
            echo '<td><center>' . $r['dtphone'] . '</center></td>';
            echo '<td><center>' . $r['dtemail_id'] . '</center></td>';
            echo "<td><a href=\"DoctorDelete.php?dtid=$r[dtid]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";




            echo '</tr><center>';
        }

        ?>
    </table>

</body>

</html>