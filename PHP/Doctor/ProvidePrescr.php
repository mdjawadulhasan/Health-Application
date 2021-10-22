


<style>
<?php

   include "design.css";
?>

</style>


<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Dtprofile.php");
    exit();
}



?>


<!DOCTYPE html>
<html>

<body>
<header id="main-header">
 <div class="container">
 <h1>Hello Doctor</h1>
 <h1>Prescription De tattari</h1>

</div>
</header>
<nav id="navbar">
    <div class="container">
<ul>
<li style="text-align:left"><a href="http://localhost/Health/"><b>&#8803;&nbsp; HOME<b></a></li> 
   
</ul>
</div>
</nav>
<br>
    <table border="1">
        <tr style="background-color:#81D3BD">
            <th>Doctor Name</th>
            <th>Patient Name</th>
            <th>Appointment Date</th>
            <th>Give Prescription</th>

        </tr>


        <?php
        $user_name = $_SESSION["user_name"];
        $query = "SELECT * FROM doctortbl WHERE dtuser_name='$user_name';";
        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $result = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($result)) {
        
            $dtid=$row['dtid'];
        }


        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT *FROM appointmenttbl where doctorid='$dtid'";
        $result = mysqli_query($conn, $query);

        while ($r = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><center>' . $r['apdtname'] . '</center></td>';
            echo '<td><center>' . $r['apptname'] . '</center></td>';
            echo '<td><center>' . $r['appdate'] . '</center></td>';
            echo "<td><a href=\"ProvidePrescrProcess.php?patientid=$r[patientid]\"><input type='submit' value='Give Prescription'></a></td>";
        }
        ?>

    </table>

</body>

</html>