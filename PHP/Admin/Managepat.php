
<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>Manage Patient</center></h1>';

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}


?>


<!DOCTYPE html>
<html>
<body>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Phone No</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Username</th>
        <th>Usermail</th>
        <th>Delete</th>
        
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
