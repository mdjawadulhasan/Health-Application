
<style>
<?php

   include "design.css";
?>
</style>

<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}


?>


<!DOCTYPE html>
<html>
<body>
   <header id="main-header">
 <div class="container">
 <h1>Hello Admin"</br>
 Manage Patient</h1>
</div>
</header>

<nav id="navbar">
    <div class="container">
<ul>
    <li><a href="AddDonor.php">Manage Donor</a></li>
 
    <li><a href="ManagePat.php">Manage Patient</a></li>
    
    <li><a href="ManageDoctor.php">Manage Doctor</a></li>
    
   <li> <a href="Adminlogout.php">Logout </a></li>
</ul>
</div>
</nav>

<br><table border="1">
    <tr style="background-color:#81D3BD">
        <th>Name</th>
        <th>Phone No</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Username</th>
        <th>Usermail</th>
        <th>&nbsp;&nbsp;&#128465&nbsp;&nbsp;</th>
        
    </tr>

    

<?php




$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$query = "SELECT *FROM patienttbl";
$result = mysqli_query($conn, $query);

while($r=mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><center>'.$r['ptname'].'</center></td>';
echo '<td><center>'.$r['ptphone'].'</center></td>';
echo '<td><center>'.$r['ptgender'].'</center></td>';
echo '<td><center>'.$r['ptage'].'</center></td>';
echo '<td><center>'.$r['ptbgrp'].'</center></td>';
echo '<td><center>'.$r['ptusername'].'</center></td>';
echo '<td><center>'.$r['ptuseremail'].'</center></td>';
echo '<td><center>'.$r['pid'].'</center></td>';
echo "<td><a href=\"PatDelete.php?pid=$r[pid]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";




echo '</tr><center>';
}

?>
</table>

</body>
</html>