
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
        header("refresh: 0; url=Patprofile.php");
    }
}




?>



<!DOCTYPE html>
<html>

<body>

<header id="main-header">
 <div class="container">
 <h1>Hello Patients profile"</h1>
 <h1>Sign in to continue</h1>

</div>
</header>
</header>
<nav id="navbar">
    <div class="container">
<ul>
<li style="text-align:left"><a href="http://localhost/Health/"><b>&#8803;&nbsp; HOME<b></a></li> 
   
</ul>
</div>
</nav>
<br>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

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