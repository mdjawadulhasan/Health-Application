<?php
echo ' <h1><center>Hello Patient</center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
echo ' <h1><center>Give your information</center></h1>';

if(session_status()>=0)
{
    session_start();
    if(isset($_SESSION["user_name"]))
    {
        header("refresh: 0; url=Patprofile.php");
    }
}

?>


<!DOCTYPE html>
<html>
<body>

    <form action="Patsignupprocess.php" method="post" >

        <label for="first_name">First name: </label>
        <input type="text" name="fname" value="" required><br><br>
        <label for="last_name">Last name: </label>
        <input type="text" name="lname" value="" required><br><br>

        <label for="Phoneno">Phone No : </label>
        <input type="text" name="phnno" value="" required><br><br>

        <label for="Gender">Gender : </label>
        <input type="radio" id="Male" name="gender" value="Male">
        <label for="Male">Male</label>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="Female">Female</label>
        <input type="radio" id="others" name="gender" value="Others">
        <label for="Others">Others</label><br><br>

        <label for="Age">Age : </label>
        <input type="text" name="age" value="" required><br><br>

        <label for="Bgrp">Blood Group : </label>
        <input type="text" name="Bgrp" value="" required><br><br>


        <label for="user_name">User name: </label>
        <input type="text" name="user_name" value="" required><br><br>
        <label for="user_pass">Password: </label>
        <input type="password" name="user_pass" value="" required><br><br>
        <label for="user_email">E-mail: </label>
        <input type="email" name="user_email" value="" required><br><br>

        <button type="submit" name="submit">Register</button><br><br>

    </form>

</body>
</html>




