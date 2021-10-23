<style>
    <?php

    include "design.css";
    ?>
</style>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    if (session_status() >= 0) {
        session_start();
        if (isset($_SESSION["user_name"])) {
            header("refresh: 0; url=Adminhome.php");
        }
    }

    ?>
</head>

<body>
    <header id="main-header">
        <div class="container">
            <h1>Sign in First</h1>
        </div>

    </header>

    <nav id="navbar">
        <div class="container">
            <ul>
                <li style="text-align:left"><a href="http://localhost/Health/"><b>&#8803;&nbsp; HOME<b></a></li>

            </ul>
        </div>
    </nav>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <br> <label for="user_name">User name: </label>
        <input type="text" name="user_name" value="" required><br><br>

        <label for="user_pass">Password: </label>
        <input type="password" name="user_pass" value="" required><br><br>
        <button type="submit" name="submit" style="background-color:#81D3BD"><b>Login</b></button>



    </form>






    <?php

    if (isset($_POST["submit"])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $user_name = $_POST['user_name'];
            $user_pass = $_POST['user_pass'];
            if ($user_name == "admin" && $user_pass == "123") {

                $_SESSION["user_name"] = $_POST["user_name"];
                header("refresh: 0; url=Adminhome.php");
                exit();
            } else {
                echo '<script>alert("Credentials incorrect")</script>';
            }
        }
    }

    ?>

</body>

</html>