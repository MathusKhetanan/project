
<!-- <<-- navbaruser.php -->

<?php
    include("config.php");
    $sql = "SELECT * FROM tbuser";
    $re = $conn->query($sql);

    if ($re->num_rows > 0) {
      $row = $re->fetch_assoc();
    }
    ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">User Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUser" aria-controls="navbarUser" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarUser">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="#">หน้าแรก</a></li>
        <li class="nav-item"><a class="nav-link" href="edit_profile.php?use_email=<?php echo $row['use_email']; ?>">แก้ไขโปรไฟล์</a></li>
        <li class="nav-item"><a class="nav-link" href="#">ข่าวประชาสัมพันธ์</a></li>
            <li class="nav-item"><a class="nav-link" href="#">การประเมิน</a></li>
        </ul>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</nav>

