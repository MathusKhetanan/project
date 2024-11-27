<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  include("../config.php");
  include("../include/headeradmin.php");
  include("../include/navbaradmin.php");
?>

<div class = "row mt-5" >
<div class="container text-center">
    <h5 class="text-primary mt-4"></h5>
 



<?php
 if(isset($_GET['delete_email'])){
    $delete_email = $_GET['use_email'];
    $sql = "DELETE FROM tbuser where use_email = '$delete_email'";
    $re = $conn->query($sql);
 }
 $sql = "SELECT * FROM tbuser";
 $re = $conn->query($sql);
 
 if ($re->num_rows > 0) {
 ?>
 <table border="1">
     <tr>
         <th>Email</th>
         <th>Name</th>
         <th>Password</th>
         <th>Level</th>
     </tr>
 <?php
     while ($as = $re->fetch_assoc()) {
 ?>
     <tr>
         <td><?php echo $as['use_email']; ?></td>
         <td><?php echo $as['use_name']; ?></td>
         <td><?php echo $as['use_password']; ?></td>
         <td><?php echo $as['use_level']; ?></td>
     </tr>
 <?php
     }
 ?>
 </table>
 <?php
 } else {
     echo "No records found.";
 }
 ?>
 </div>
</body>
</html>