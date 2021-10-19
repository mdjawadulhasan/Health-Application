<?php
echo ' <h1><center>Hello Doctor</center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';
echo ' <h1><center>Give your information</center></h1>';

if(session_status()>=0)
{
    session_start();
    if(isset($_SESSION["dtuser_name"]))
    {
        header("refresh: 0; url=Patprofile.php");
    }
}

?>


<!DOCTYPE html>
<html>
<body>

    <form action="Dtsignupprocess.php" method="post" >

        <label for="Name">Name: </label>
        <input type="text" name="name" value="" required><br><br>
       
       
        <label for="degree">Degree: </label>
        <input type="text" name="degree" value="" required><br><br>

        <label for="Dept">Department : </label>
        <input type="text" name="dept" value="" required><br><br>

        <label for="Chamber">Chamber : </label>
        <input type="text" name="chamber" value="" required><br><br>

        <label for="Visiting Time">Visiting Time : </label>
        <input type="text" name="vtime" value="" required><br><br>

        <label for="Visiting Days">Visiting Days : </label>
        <input type="text" name="vdays" value="" required><br><br>

        <label for="Phone No">Phone No : </label>
        <input type="text" name="phnno" value="" required><br><br>


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




