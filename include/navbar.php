<?php
session_start(); 
include "config.php";
$use_level = isset($_SESSION['use_level']) ? $_SESSION['use_level'] : 'guest';
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> 
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
            <?php if ($use_level === "guest"): ?>
                <li class="nav-item active"> 
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Link</a> 
                </li>
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
                        <a class="dropdown-item" href="#">Action</a> 
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> 
                    </div>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link disabled" href="#">Disabled</a> 
                </li>
            <?php endif; ?>
        </ul>
        
        <!-- ปุ่ม Login -->
        <form class="form-inline my-2 my-lg-0">
            <?php if ($use_level === "guest"): ?>
                <a href="login.php" class="btn btn-primary my-2 my-sm-0">Login</a>
            <?php else: ?>
                <a href="logout.php" class="btn btn-danger my-2 my-sm-0">Logout</a>
            <?php endif; ?>
        </form>
    </div>
</nav>
