<?php

echo ' <h1><center>Hello Patients profile"</center></h1>';
echo ' <h1><center>Sign in to continue</center></h1>';
if(session_status()>=1)
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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="user_name">User name: </label>
        <input type="text" name="user_name" value="" required><br><br>

        <label for="user_pass">Password: </label>
        <input type="password" name="user_pass" value="" required><br><br>


        <button type="submit" name="submit">Login</button><br><br>

    </form>

</body>

</html>



<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];

        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT * from patienttbl WHERE ptusername='$user_name' and ptpass='$user_pass';";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
           // session_start();
            $_SESSION["user_name"] = $_POST["user_name"];
            header("refresh: 0; url=Patprofile.php");
            mysqli_close($conn);
            exit();
        }
    }
}

?>