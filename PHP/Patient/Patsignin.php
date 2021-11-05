<?php

if (session_status() >= 1) {
    session_start();
    if (isset($_SESSION["user_name"])) {
        header("refresh: 0; url=Patprofile.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>
<body>
    <section class="side">
        <img src="../../Images/Loginhm.svg" alt="">
        
    </section>

    <div class="login-box">
        <section class="main">
            <div class="loginctrl">
                <p class="title">Welcome!</p>
                <div class="separator"></div>
                <p class="welcome-message">Provide Login Credentials</p>
    
                <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="frm">
                        <input type="text" name="user_name" placeholder="Username" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="frm">
                        <input type="password" name="user_pass" placeholder="Password" required>
                        <i class="fas fa-lock"></i>
                    </div>
    
                    <button type="submit" name="submit" class="submit">Login</button>
                </form>
                <div class="signup_link">Not a Member ?  <a href="Patsignup.php"> Sign up</a></div>
            </div>
        </section>
    </div>
    
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
        } else {
            echo '<script>alert("Credential Incorrect!")</script>';
        }
    }
}

?>