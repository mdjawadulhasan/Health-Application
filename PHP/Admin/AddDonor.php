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
            <h1>Manage Donor</h1>
        </div>
    </header>


    <nav id="navbar">
        <div class="container">
            <ul>

                <li style="text-align:left"><a href="http://localhost/Health/"><b>&#8803;&nbsp; HOME<b></a></li>
                <li><a href="AddDonor.php">&nbsp;&nbsp;&nbsp;Manage Donor</a></li>

                <li><a href="ManagePat.php">Manage Patient</a></li>

                <li><a href="ManageDoctor.php">Manage Doctor</a></li>

                <li> <a href="Adminlogout.php">Logout </a></li>



            </ul>
        </div>
    </nav>



    <form action="AddDnrprocess.php" method="post">

        <br> <label for="name">Full Name: </label>
        <input type="text" name="name" value="" required><br><br>

        <label for="Phoneno">Phone No : </label>
        <input type="text" name="phnno" placeholder="01x-xxxxxxxx" pattern="[0-9]{3}-[0-9]{8}" required><br><br>

        <label for="bgrp">Choose Blood Group :</label>
        <select name="bgrp" id="bgrp">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br><br>

        <label for="city">City : </label>
        <input type="text" name="city" value="" required><br><br>

        <label for="Area">Area : </label>
        <input type="text" name="area" value="" required><br><br>

        <button type="submit" name="submit" style="background-color:#81D3BD"><b>Add</b></button><br><br>

    </form>

    <table border="1">
        <tr style="background-color:#81D3BD">
            <th>Name</th>
            <th>Phone No</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Area</th>
            <th>&nbsp;&nbsp;&#128465&nbsp;&nbsp;</th>

        </tr>





        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT *FROM donortbl";
        $result = mysqli_query($conn, $query);


        while ($r = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><center>' . $r['dnrname'] . '</center></td>';
            echo '<td><center>' . $r['dnrphone'] . '</center></td>';
            echo '<td><center>' . $r['dnrbrgp'] . '</center></td>';
            echo '<td><center>' . $r['dnrcity'] . '</center></td>';
            echo '<td><center>' . $r['dnrarea'] . '</center></td>';

            echo "<td><a href=\"DeleteDnr.php?did=$r[did]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";




            echo '</tr><center>';
        }

        ?>
    </table>



</body>

</html>