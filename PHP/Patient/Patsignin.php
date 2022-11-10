<?php
if (session_status() >= 1) {
    session_start();
    if (isset($_SESSION["user_name"])) {
        header("refresh: 0; url=PatientHome.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/Loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">




    <link rel="icon" href="../../Images/ticon.svg" type="image/icon type">
    <title>Login</title>
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

                <form class="login-form" action="loginprocess.php" method="post">
                    <div class="frm">
                        <input type="text" name="user_name" placeholder="Username" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="frm">
                        <input type="password" name="user_pass" placeholder="Password" required>
                        <i class="fas fa-lock"></i>
                    </div>

                    <button type="submit" class="lbtn" name="submit" class="submit">Login</button>
                </form>
                Not a Member ?
                <br> <button type="button" class="btsn" name="signupsubmi" data-toggle="modal" data-target=".bd-example-modal-lg">Sign up</button>
            </div>
        </section>
    </div>



    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Registration</h3>

                            <form action="Patsignupprocess.php" name="signupForm" onsubmit="return validateForm()" method="post" class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" name="fname" value="" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" name="lname" value="" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Age *" name="age" value="" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="siname" placeholder="User Name *" name="user_name" value="" required />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Male" checked />
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Female" />
                                                <span>Female </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="Others" />
                                                <span>Others </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" name="user_email" value="" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phnno" placeholder="01x-xxxxxxxx" pattern="[0-9]{3}-[0-9]{8}" required />
                                    </div>
                                    <div class="form-group">
                                        <select name="Bgrp" class="form-control">
                                            <option class="hidden" selected disabled>
                                                Blood Group
                                            </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="sipass" placeholder="Password *" name="user_pass" value="" required />
                                    </div>
                                    <input type="submit" name="submit" id="sisubmit" class="btnRegister" />
                                </div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            let fnameval = document.forms["signupForm"]["fname"].value;
            for (let i = 0; i < fnameval.length; i++) {

                if (!isNaN(fnameval[i])) {
                    Swal.fire(
                        "Invalid First Name",
                        "Try Again",
                        "error"
                    )
                    return false;
                }
            }


            let lnameval = document.forms["signupForm"]["lname"].value;
            for (let i = 0; i < lnameval.length; i++) {

                if (!isNaN(lnameval[i])) {
                    Swal.fire(
                        "Invalid Last Name",
                        "Try Again",
                        "error"
                    )
                    return false;
                }
            }


            let ageval = document.forms["signupForm"]["age"].value;
            if ((ageval % 1 != 0) || isNaN(ageval)) {
                Swal.fire(
                        "Invalid Age",
                        "Try Again",
                        "error"
                    )
                return false;
            }

            let user_nameval = document.forms["signupForm"]["user_name"].value;
            let count = 0;
            for (let i = 0; i < user_nameval.length; i++) {
                if (!isNaN(user_nameval)) {
                    count++;
                }
            }

            if (count == user_nameval.length) {
                Swal.fire(
                        "Invalid User Name",
                        "Try Again",
                        "error"
                    )
                return false;
            }


            let passval = document.forms["signupForm"]["user_pass"].value;
            if (passval.length < 5) {
               
                Swal.fire(
                        "Password is Too weak",
                        "Try Again",
                        "error"
                    )
                return false;
            }




        }
    </script>


</body>

</html>