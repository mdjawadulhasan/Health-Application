<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>Add Donor</center></h1>';

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}


?>


<!DOCTYPE html>
<html>
<body>

    <form action="AddDnrprocess.php" method="post" >

        <label for="name">Full Name: </label>
        <input type="text" name="name" value="" required><br><br>
       
        <label for="Phoneno">Phone No : </label>
        <input type="text" name="phnno" value="" required><br><br>

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

        <button type="submit" name="submit">Add</button><br><br>

    </form>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Phone No</th>
        <th>Blood Group</th>
        <th>City</th>
        <th>Area</th>
        <th>Delete</th>
        
    </tr>


    
</body>
</html>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$query = "SELECT *FROM donortbl";
$result = mysqli_query($conn, $query);


while($r=mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><center>'.$r['dnrname'].'</center></td>';
echo '<td><center>'.$r['dnrphone'].'</center></td>';
echo '<td><center>'.$r['dnrbrgp'].'</center></td>';
echo '<td><center>'.$r['dnrcity'].'</center></td>';
echo '<td><center>'.$r['dnrarea'].'</center></td>';

echo "<td><a href=\"DeleteDnr.php?did=$r[did]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";


// echo '<td>header("location:DeleteDnr.php?id=$r[did] <input type='submit' > </td>)";

echo '</tr><center>';
}

?>
</table>


