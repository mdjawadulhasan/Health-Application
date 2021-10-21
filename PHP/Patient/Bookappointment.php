
<style>
<?php

   include "design.css";
?>
</style>

<?php



session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Patprofile.php");
    exit();
}

function ShowDocttor($sql)
{
    $conn = mysqli_connect('localhost', 'root', '', 'phawa');
    $query = $sql; 
    $result = mysqli_query($conn, $query);

    while ($r = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td><center>' . $r['dtname'] . '</center></td>';
        echo '<td><center>' . $r['dtuser_name'] . '</center></td>';
        echo '<td><center>' . $r['dtdegree'] . '</center></td>';
        echo '<td><center>' . $r['dtdept'] . '</center></td>';
        echo '<td><center>' . $r['dtchamber'] . '</center></td>';
        echo '<td><center>' . $r['dtphone'] . '</center></td>';
        echo '<td><center>' . $r['dtemail_id'] . '</center></td>';
        echo "<td><a href=\"Bookaptprocess.php?dtid=$r[dtid]\"><input type='submit' value='Set'></a></td>";
        echo '</tr><center>';
    }
}



?>


<!DOCTYPE html>
<html>

<body>
<header id="main-header">
 <div class="container">
 <h1>Hello Admin"</h1>
 <h1>Manage Doctor</h1>
</div>
</header>
<br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="Search">Seacrh By Department: </label>
        <input type="text" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>" required>
        <button type="submit" name="submit">Search</button>
        <button type="submit" name="show">Show All</button><br><br>

    </form>


    <table border="1">
        <tr style="background-color:#81D3BD">
            <th>Name</th>
            <th>User Name</th>
            <th>Degree</th>
            <th>Department</th>
            <th>Chamber</th>
            <th>Phone No</th>
            <th>Mail ID</th>
            <th>Delete</th>

        </tr>






        <?php
        if (isset($_POST["submit"])) {
            $dept = $_POST['search'];
            $qry = "SELECT * FROM doctortbl WHERE dtdept like '%$dept%'";
            ShowDocttor($qry);
        } else {
            $qry = "SELECT *FROM doctortbl";
            ShowDocttor($qry);
        }


        if (isset($_POST["show"])) {
            $qry = "SELECT *FROM doctortbl";
            ShowDocttor($qry);
        }
        ?>



    </table>

</body>

</html>