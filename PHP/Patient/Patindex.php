
<style>
<?php

   include "design.css";
?>
</style>



<!DOCTYPE html>
<html>

<head>
    <style>
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

        }

        .button1 {
            background-color: #4CAF50;
        }

        .button2 {
            background-color: #FFCA33;
        }
    </style>
</head>

<body>
<header id="main-header">
 <div class="container">
 <h1>Hello Patient</h1>
 <h1>Welcome to Personal Health Application</h1>
</div>
</header>
 <br>
    <form action="Patsignin.php" method="POST">
        <input type="submit" class="button button1" value="Sign in">
    </form>
    <form action="Patsignup.php" method="POST">
        <input type="submit" class="button button2" value="Sign up">
    </form>

</body>

</html>