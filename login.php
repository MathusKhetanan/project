<?php
  session_start();
  include("config.php");
	include("include/header.php");

	include("include/navbarguest.php");


if(isset($_POST['btnlogin'])){
    $use_email = $_POST['use_email'];
    $use_password = $_POST['use_password'];
    
    $sql = "SELECT * FROM tbuser where use_email = '$use_email' and use_password = '$use_password'";
    $re = $conn->query($sql);

    if($re->num_rows == 1){
        $as = $re->fetch_assoc();

        $_SESSION['use_email'] = $use_email;
        $_SESSION['use_password'] = $use_password;
        $_SESSION['use_name'] = $use_name;
        $_SESSION['use_level'] = $as['use_level'];

        header("location:" . ($as['use_level'] === 'admin' ? 'admin.php' : 'home.php'));
        exit();
    }
}
?>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 25rem;">
            <h2 class="text-center mb-4">Login</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="use_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="use_email" name="use_email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="use_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="use_password" name="use_password" placeholder="Enter your password" required>
                </div>
                <button type="submit" name="btnlogin" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3">
                <small>Don't have an account? <a href="register.php">Register</a></small>
            </p>
        </div>
    </div>

    <?php include("include/footer.php"); ?>