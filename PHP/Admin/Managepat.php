

<?php
session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Admin.php");
    exit();
}
$title = 'Donor List';
require_once './includes/header.php';

?>
<br>
<br>
<br>
<br>
<br>


<section class="Dnrlist">
    

    <div class="dnrimg">
       
    </div>
    <div class="dnrtbl">
    <table class="tablestyle">
        <thead>
            <tr>
            <th>Name</th>
        <th>Phone No</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Username</th>
        <th>Usermail</th>
            <th>&nbsp;&nbsp; Delete(&#128465)  &nbsp;&nbsp;</th>
            </tr>
        </thead>
        <tbody>
    </div>
   
</section>


    

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
echo "<td><a href=\"PatDelete.php?pid=$r[pid]\" onClick=\"return confirm
('Are you sure to delete?')\"><input type='submit' value=''>&nbsp;&nbsp; &nbsp;&nbsp;<i class='fas fa-trash-alt'></i></a></td>";




echo '</tr><center>';
}

?>
</table>

</body>
</html>