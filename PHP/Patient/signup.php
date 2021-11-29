<?php
if (session_status() >= 0) {
    session_start();
    if (isset($_SESSION["user_name"])) {
        header("refresh: 0; url=PatientHome.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Patient/css/signupstyle.css" />
    <script type="text/javascript" src="Js/formvalidation.js"></script>
    <link rel="icon" href="../../Images/ticon.svg" type="image/icon type">

    <title>Document</title>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="../../Images/signup.svg" alt="" />
                <h3>Welcome</h3>
                <h4>To</h4>
                <h4>Health Care System</h4>
                <p>Provide Your information and join Now!</p>
                <input type="submit" class="loginbtn" name="" value="Login" onclick="location.href='Patsignin.php';" /><br />
            </div>
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
                                    <input type="text" class="form-control" placeholder="User Name *" name="user_name" value="" required />
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
                                    <input type="password" class="form-control" placeholder="Password *" name="user_pass" value="" required />
                                </div>
                                <input type="submit" name="submit" class="btnRegister" />
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>