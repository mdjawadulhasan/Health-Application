
<style>
<?php

   include "design.css";
?>
</style>
<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=patindex.php");
    exit();
} else {

    $user_name = $_SESSION["user_name"];
    $query = "SELECT * FROM patienttbl WHERE ptusername='$user_name';";
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $currentpass = $row['ptpass'];
        $phoneno = $row['ptphone'];
        $age = $row['ptage'];
        $Bgrp = $row['ptbgrp'];
    }
}
?>



<!DOCTYPE html>
<html>

<body>


<header id="main-header">
 <div class="container">
 <h1>Hello Patients profile Edit </h1>
 <h1>Welcome to Personal Health Application</h1>
</div>
</header>

   <br> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">



        <label for="Phoneno"><b>Phone No :<b> </label>
        <input type="text" name="phnno" value="<?php echo $phoneno; ?>" required><br><br>

        <label for="Age"><b>Age : <b></label>
        <input type="text" name="age" value="<?php echo $age; ?>" required><br><br>

        <label for="Bgrp"><b>Blood Group : <b></label>
        <input type="text" name="Bgrp" value="<?php echo $Bgrp; ?>" required><br><br>

        <label for="user_pass"><b>Password: <b></label>
        <input type="password" name="newpass" value="" required><br><br>

        <label for="user_pass"><b>Current Password: <b></label>
        <input type="password" name="crntpass" value="" required><br><br>


        <button type="submit" name="submit" style="background-color:#04AA6D"><b>Update<b></button><br><br>

    </form>

</body>

</html>


<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_phn=$_POST['phnno'];
        $new_age=$_POST['age'];
        $new_bgrp=$_POST['Bgrp'];
        $new_pass=$_POST['newpass'];

        $input_crnt_pass = $_POST['crntpass'];
        if ($input_crnt_pass == $currentpass) {

            $sql = "UPDATE patienttbl SET ptphone='$new_phn',ptage='$new_age',ptbgrp='$new_bgrp',ptpass='$new_pass' where ptusername='$user_name';";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Info Updated!")</script>';
               header("refresh: 0; url=Pateditprofile.php");
                mysqli_close($conn);
            }
            else
            {
                echo '<script>alert("Try Again!")</script>';
                header("refresh: 0; url=Pateditprofile.php");
            }
        } 
        else {
            echo '<script>alert("Password Didnt matched!")</script>';
            header("refresh: 0; url=Pateditprofile.php");
        }
    }
}

?>