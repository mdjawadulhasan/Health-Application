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

</body>
</html>
