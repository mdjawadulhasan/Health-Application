
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>loginprocess</title>
</head>

<body>

</body>

</html>
<?php
require_once '../conn.php';
if (isset($_POST["submit"])) {

    // collect value of input field
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

  
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
        echo '<script>Swal.fire(
                "Credentials Incorrect",
               "Try Again",
                "error"
              )</script>';
        header("refresh: 2; url=Patsignin.php");
    }
}

?>