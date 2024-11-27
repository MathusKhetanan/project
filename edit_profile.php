<?php
include('config.php');
session_start();

$use_email = $_SESSION['use_email'];
$sql = "SELECT * FROM tbuser where use_email = '$use_email'";
$re = $conn->query($sql);
$rs = $re->fetch_assoc();

if(isset($_POST['submit'])){
    $new_name = $_POST['use_name'];
    $new_password = $_POST['use_password'];

    $sql = "UPDATE tbuser set use_name = '$new_name' , use_password = '$new_password' where use_email = '$use_email'";
    $conn->query($sql);
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    <form action="" method="post">
        <label for="use_name">Name:</label><br>
        <input type="text" id="use_name" name="use_name" value="<?php echo $rs['use_name']; ?>" required><br><br>

        <label for="use_password">Password:</label><br>
        <input type="password" id="use_password" name="use_password" required><br><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>