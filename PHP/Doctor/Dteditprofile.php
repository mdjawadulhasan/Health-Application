<?php
echo ' <h1><center>Hello Dcotor profile Edit </center></h1>';
echo ' <h1><center>Welcome to Personal Health Application</center></h1>';

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 1; url=Dtindex.php");
    exit();
} else {

    $user_name = $_SESSION["user_name"];
    $query = "SELECT * FROM doctortbl WHERE dtuser_name='$user_name';";
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['dtname'];
        $degree = $row['dtdegree'];
        $dept = $row['dtdept'];
        $chamber = $row['dtchamber'];
        $vtime = $row['dtvisitingtime'];
        $vdays = $row['dtvisitingdays'];
        $phnno = $row['dtphone'];
        $currentpass = $row['dtpass'];
        
    }
}
?>



<!DOCTYPE html>
<html>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="name">Name  : </label>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br><br>

        <label for="degree">Degree : </label>
        <input type="text" name="degree" value="<?php echo $degree; ?>" required><br><br>
        
        <label for="dept">Department : </label>
        <input type="text" name="dept" value="<?php echo $dept; ?>" required><br><br>
        
        <label for="chamber">Chamber : </label>
        <input type="text" name="chamber" value="<?php echo $chamber; ?>" required><br><br>

        <label for="vtime">Visiting Time : </label>
        <input type="text" name="vtime" value="<?php echo $vtime; ?>" required><br><br>

        <label for="vdays">Visiting Days : </label>
        <input type="text" name="vdays" value="<?php echo $vdays ; ?>" required><br><br>

        <label for="phnno">Phone No : </label>
        <input type="text" name="phnno" value="<?php echo $phnno; ?>" required><br><br>


        <label for="user_pass">New Password: </label>
        <input type="password" name="newpass" value="" required><br><br>

        <label for="user_pass">Current Password: </label>
        <input type="password" name="crntpass" value="" required><br><br>


        <button type="submit" name="submit">Update</button><br><br>

    </form>

</body>

</html>


<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

        $new_name = $_POST['name'];
        $new_degree = $_POST['degree'];
        $new_dept = $_POST['dept'];
        $new_chamber = $_POST['chamber'];
        $new_vtime = $_POST['vtime'];
        $new_vdays = $_POST['vdays'];
        $new_phnno = $_POST['phnno'];
        $new_pass=$_POST['newpass'];



        $input_crnt_pass = $_POST['crntpass'];
        if ($input_crnt_pass == $currentpass) {

            $sql = "UPDATE doctortbl SET dtname='$new_name',dtdegree='$new_degree',dtdept='$new_dept',dtchamber='$new_chamber',dtvisitingtime='$new_vtime',dtvisitingdays='$new_vdays',dtphone='$new_phnno',dtpass='$new_pass' where dtuser_name='$user_name';";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Info Updated!")</script>';
               header("refresh: 0; url=Dteditprofile.php");
                mysqli_close($conn);
            }
            else
            {
                echo '<script>alert("Try Again!")</script>';
                header("refresh: 0; url=Dteditprofile.php");
            }
        } 
        else {
            echo '<script>alert("Password Didnt matched!")</script>';
           header("refresh: 0; url=Dteditprofile.php");
        }
    }
}

?>