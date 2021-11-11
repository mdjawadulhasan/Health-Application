<?php
$title = 'View Appointment';
require_once './includes/header.php';
require_once './includes/sidebar.php';
?>


<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patprofile.php");
    exit();
}

?>

<section class="viewapt">
    <div class="viewaptimg">
    <img src="../../Images/Apt.gif" alt="" width="500" height="500">
    </div>
    <div class="viewapttbl">
    <table class="tablestyle">
        <thead>

            <tr>
                <th>Doctor Name</th>
                <th>Patient Name</th>
                <th>Appointment Date</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>

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
('Are you sure to delete?')\"><input type='submit' value=''><i class='fas fa-trash-alt'></i></a></td>";
            }

            ?>

        </tbody>
    </table>

    </div>
</section>