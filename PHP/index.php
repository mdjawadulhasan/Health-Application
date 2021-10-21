<?php
echo ' <h1><center>Welcome to Personal Health Application</center></h1>'
?>

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

    <form action="Patient/Patindex.php" method="POST">
        <input type="submit" class="button button1" value="Patient">
    </form>
    <form action="Doctor/Dtindex.php" method="POST">
        <input type="submit" class="button button2" value="Dotcor">
    </form>

    <form action="Admin/Admin.php" method="POST">
        <input type="submit" class="button button2" value="Admin">
    </form>

</body>
</html>