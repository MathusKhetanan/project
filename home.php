
<?php
    include("config.php");
	include("include/header.php");
	include("include/navbaruser.php");
	
    session_start();
    $use_email = $_SESSION['use_email'];
    $sql = "SELECT * FROM tbuser";
    $re = $conn->query($sql);
    if ($re->num_rows > 0) { 
    ?>

    <?php
    } 
    ?>
<div class = "row mt-5" >
<div class="container text-center">
    <h5 class="text-primary mt-4">ข่าวประชาสัมพันธ์</h5>
</div>

  <table class="table table-hover">
            <tr>
                <th>อีเมล</th>
                <th>ชื่อ</th>
                <th>รหัสผ่าน</th>
            </tr>
            <?php
        while ($row = $re->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['use_email']; ?></td>
                <td><?php echo $row['use_name']; ?></td>
                <td><?php echo $row['use_password']; ?></td>
            </tr>
        <?php
        }
        ?>
 
  </table>
	</div>
<?php include("include/footer.php"); ?>