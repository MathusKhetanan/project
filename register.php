<?php
    include("config.php");
	include("include/header.php");

	include("include/navbarguest.php");
if(isset($_POST['btnregister'])){
    $use_email = $_POST['use_email'];
    $use_name = $_POST['use_name'];
    $use_password = $_POST['use_password'];
    $use_level = 'user';
    
    $sql = "SELECT * FROM tbuser where use_email = '$use_email'";
    $re = $conn->query($sql);

    if($re->num_rows == 0){
       $sql = "INSERT INTO tbuser(use_email , use_name , use_password, use_level)
                           values('$use_email','$use_name','$use_password','$use_level')";
        $conn->query($sql);
      header("location:login.php");

    }else{
        "<script>
        alter('error');
        </script>";
    }
    exit();
}
?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">User Registration</h2>
        
        <!-- Registration Form -->
        <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="use_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="use_email" name="use_email" required>
            </div>
            
            <div class="mb-3">
                <label for="use_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="use_name" name="use_name" required>
            </div>

            <div class="mb-3">
                <label for="use_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="use_password" name="use_password" required>
            </div>

            <button type="submit" name="btnregister" class="btn btn-primary w-100">Register</button>
        </form>

        <!-- Redirect to Login -->
        <div class="text-center mt-3">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    <?php include("include/footer.php"); ?>