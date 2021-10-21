
<style>
<?php

   include "design.css";
?>
</style>
<?php
if(session_status()>=1)
{
    session_start();
    if(isset($_SESSION["user_name"]))
    {
        header("refresh: 0; url=Dtprofile.php");
    }
}

?>



<!DOCTYPE html>
<html>

<body>

<header id="main-header">
 <div class="container">
 <h1>Sign in to Continue</h1>
 <h1>Welcome to Personal Health Application</h1>
</div>
</header>

    <br> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="user_name">User name: </label>
        <input type="text" name="user_name" value="" required><br><br>

        <label for="user_pass">Password: </label>
        <input type="password" name="user_pass" value="" required><br><br>

     
        <button type="submit" name="submit" style="background-color:#04AA6D">Login</button><br><br>

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
        $query = "SELECT * from doctortbl WHERE dtuser_name='$user_name' and dtpass='$user_pass';";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
           // session_start();
            $_SESSION["user_name"] = $_POST["user_name"];
            header("refresh: 0; url=Dtprofile.php");
            mysqli_close($conn);
            exit();
        }
        else
        {
            echo '<script>alert("Login Failed!")</script>';
        }
    }
}

?>