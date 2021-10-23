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
            <h1>Hello Patients profile </h1>
            <h1>Welcome to Personal Health Application</h1>
            <h1>EDIT PROFILE</h1>
            
        </div>
    </header>

    <nav id="navbar">
        <div class="container">
            <ul>
                </header>

                <li style="text-align:left"><a href="http://localhost/phawa/php"><b>&#8803;&nbsp; HOME<b></a></li>


                <li> <a href="Bookappointment.php">Book Appointment</a></a></li>
                <li> <a href="Viewappointment.php">view Appointment</a></a></a></li>
                <li> <a href="Seepresc.php">See Prescription</a></a></li>
                <li> <a href="Donorlist.php">Donorlist</a></a></li>
                <li><a href="Pateditprofile.php">Edit</a></a></li>
                <li><a href="Patprofile.php">Profile</a></a></li>
                <li><a href="Patlogout.php">Logout</a></a></li>




            </ul>
        </div>
    </nav>
    <br>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">



        <label for="Phoneno"><b>Phone No :<b> </label>
        <input type="text" name="phnno" value="<?php echo $phoneno; ?>" required><br><br>

        <label for="Age"><b>Age : <b></label>
        <input type="text" name="age" value="<?php echo $age; ?>" required><br><br>

        <label for="Bgrp"><b>Blood Group : <b></label>
        <input type="text" name="Bgrp" value="<?php echo $Bgrp; ?>" required><br><br>

        <label for="user_pass"><b>New Password: <b></label>
        <input type="password" name="newpass" value="<?php echo $currentpass; ?>" required><br><br>

        <label for="user_pass"><b>Current Password: <b></label>
        <input type="password" name="crntpass" value="" required><br><br>


        <button type="submit" name="submit" style="background-color:#04AA6D"><b>Update<b></button><br><br>

    </form>

</body>

</html>


<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_phn = $_POST['phnno'];
        $new_age = $_POST['age'];
        $new_bgrp = $_POST['Bgrp'];
        $new_pass = $_POST['newpass'];

        $input_crnt_pass = $_POST['crntpass'];
        if ($input_crnt_pass == $currentpass) {

            $sql = "UPDATE patienttbl SET ptphone='$new_phn',ptage='$new_age',ptbgrp='$new_bgrp',ptpass='$new_pass' where ptusername='$user_name';";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Info Updated!")</script>';
                header("refresh: 0; url=Pateditprofile.php");
                mysqli_close($conn);
            } else {
                echo '<script>alert("Try Again!")</script>';
                header("refresh: 0; url=Pateditprofile.php");
            }
        } else {
            echo '<script>alert("Password Didnt matched!")</script>';
            header("refresh: 0; url=Pateditprofile.php");
        }
    }
}

?>