<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>Sign in to continue</center></h1>';

if(session_status()>=0)
{
    session_start();
    if(isset($_SESSION["user_name"]))
    {
        header("refresh: 0; url=Adminhome.php");
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
        
        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];
        if ($user_name=="admin" && $user_pass=="123") {

            $_SESSION["user_name"] = $_POST["user_name"];
            header("refresh: 0; url=Adminhome.php");
            exit();
        }
        else
        {
            echo '<script>alert("Credentials incorrect")</script>';
        }
    }
}

?>