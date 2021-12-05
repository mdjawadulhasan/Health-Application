

<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}
$title = 'Donor List';
require_once './includes/header.php';

?>
<br>
<br>
<br>
<br>




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



        <section class="Dnrlist">
    

    <div class="dnrimg">
       
    </div>
    <div class="dnrtbl">
    <table class="tablestyle" >
        <thead>
            <tr>
            <th>Name</th>
            <th>Phone No</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Area</th>
            <th>&nbsp;&nbsp; Delete(&#128465)  &nbsp;&nbsp;</th>
            </tr>
        </thead>
        <tbody>
    </div>
   
</section>



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
('Are you sure to delete?')\"><input type='submit' value=''>&nbsp;&nbsp; &nbsp;&nbsp;<i class='fas fa-trash-alt'></i></a></td>";




            echo '</tr><center>';
        }

        ?>
    </table>



</body>

</html>