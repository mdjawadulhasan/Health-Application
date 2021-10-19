
<?php

echo ' <h1><center>Hello Admin"</center></h1>';
echo ' <h1><center>Manage Doctor</center></h1>';

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
        <th>User Name</th>
        <th>Degree</th>
        <th>Department</th>
        <th>Chamber</th>
        <th>Phone No</th>
        <th>Mail ID</th>
        <th>Delete</th>
        
    </tr>

    

<?php




$conn = mysqli_connect('localhost', 'root', '', 'phawa');
$query = "SELECT *FROM doctortbl";
$result = mysqli_query($conn, $query);

while($r=mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><center>'.$r['dtname'].'</center></td>';
echo '<td><center>'.$r['dtuser_name'].'</center></td>';
echo '<td><center>'.$r['dtdegree'].'</center></td>';
echo '<td><center>'.$r['dtdept'].'</center></td>';
echo '<td><center>'.$r['dtchamber'].'</center></td>';
echo '<td><center>'.$r['dtphone'].'</center></td>';
echo '<td><center>'.$r['dtemail_id'].'</center></td>';
echo "<td><a href=\"DoctorDelete.php?dtid=$r[dtid]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value='Delete'></a></td>";




echo '</tr><center>';
}

?>
</table>

</body>
</html>
