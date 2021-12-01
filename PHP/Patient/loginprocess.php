
<?php

if (isset($_POST["submit"])) {
   
        // collect value of input field
        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];

        $conn = mysqli_connect('localhost', 'root', '', 'phawa');
        $query = "SELECT * from patienttbl WHERE ptusername='$user_name' and ptpass='$user_pass';";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            session_start();
            $_SESSION["user_name"] = $_POST["user_name"];
            header("refresh: 0; url=PatientHome.php");
            mysqli_close($conn);
            exit();
        } else {
            echo "<script>alert('Invalid login details');</script>";
            header("refresh: 0; url=Patsignin.php");
        }
    
}

?>