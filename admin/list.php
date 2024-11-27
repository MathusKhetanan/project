
<?php
    include("../config.php");
    include("../include/headeradmin.php");
    include("../include/navbaradmin.php");
	
    if(isset($_GET['delete_email'])){
        $delete_email = $_GET['delete_email'];
        $sql = "DELETE FROM tbuser where use_email = '$delete_email'";
        $re = $conn->query($sql);
    }

    $sql = "SELECT * FROM tbuser";
    $re = $conn->query($sql);
    if ($re->num_rows > 0) { 
    ?>

    <?php
    } 
    ?>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="container-fluid text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>อีเมล</th>
                        <th>ชื่อ</th>
                        <th>รหัสผ่าน</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $re->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['use_email']; ?></td>
                            <td><?php echo $row['use_name']; ?></td>
                            <td><?php echo $row['use_password']; ?></td>
                            <td><a href="?delete_email=<?php echo $row['use_email']; ?>" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?');">ลบ</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
