<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>Manage Doctor</center></h1>';

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patprofile.php");
    exit();
}



?>


<!DOCTYPE html>
<html>

<body>


    <table border="1">
        <tr>
            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Appointment Date</th>
            <th>Delete</th>

        </tr>


        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT *FROM appointmenttbl";
        $result = mysqli_query($conn, $query);

        while ($r = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><center>' . $r['apdtname'] . '</center></td>';
            echo '<td><center>' . $r['apdtname'] . '</center></td>';
            echo '<td><center>' . $r['appdate'] . '</center></td>';
            echo "<td><a href=\"Aptdelete.php?aptid=$r[aptid]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";
        }
        ?>

    </table>

</body>

</html>