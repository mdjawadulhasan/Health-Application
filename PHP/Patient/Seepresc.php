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
 <h1>Hello Patient</h1>
 <h1>Prescription Dekho tomar</h1>

</div>
</header>
 
<br>
    <table border="1">
        <tr style="background-color:#81D3BD">
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Prescription</th>

        </tr>


        <?php
        $user_name = $_SESSION["user_name"];
        $query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $result = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($result)) {
        
            $ptid=$row['pid'];
        }


        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT *FROM prescriptiontbl where pid='$ptid'";
        $result = mysqli_query($conn, $query);

        while ($r = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><center>' . $r['Dtname'] . '</center></td>';
            echo '<td><center>' . $r['Date'] . '</center></td>';
            echo '<td><center>' . $r['prescription'] . '</center></td>';
            echo '</tr>';
        }
        ?>

    </table>

</body>

</html>