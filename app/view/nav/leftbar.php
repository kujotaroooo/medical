<?php
require_once '../middleware/auth.php';
login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
/* =========================
   GLOBAL
========================= */
body {
    margin: 0;
    padding-top: 50px;
    font-family: "Segoe UI", Arial, sans-serif;
    background: #f4fbf6;
}


.navbar {
    background: #28a745;
    border: none;
    margin: 0;
    border-radius: 0;

    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 70px;
    z-index: 1000;

    display: flex;
    align-items: center;
    
}

.navbar-header {
    padding-left: 15px;
}

.navbar-brand {
    color: #fff !important;
    font-weight: 600;
    font-size: 18px;
    text-decoration: none;
  
}

/* =========================
   SIDEBAR (FIXED)
========================= */
.sidebar {
    width: 250px;
    background: #ffffff;

    position: fixed;
    top: 50px;
    left: 0;

    height: calc(100vh - 50px);
    overflow-y: auto;

    border-right: 1px solid #e6e6e6;
}

/* MENU */
#side-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}

#side-menu li a {
    display: block;
    padding: 12px 18px;
    text-decoration: none;
    color: #333;
    font-size: 14px;

    border-left: 4px solid transparent;
    transition: 0.2s;
}

#side-menu li a i {
    margin-right: 8px;
    color: #28a745;
}

/* HOVER */
#side-menu li a:hover {
    background: #eaf7ef;
    border-left: 4px solid #28a745;
    color: #28a745;
}

/* SUBMENU */
.nav-second-level {
    list-style: none;
    padding-left: 15px;
    background: #f9fdfb;
}

.nav-second-level li a {
    padding: 10px 18px;
    font-size: 13px;
    color: #555;
}

.nav-second-level li a:hover {
    background: #eaf7ef;
    color: #28a745;
}

/* LOGOUT (RED) */
#side-menu li:last-child a {
    color: #c0392b;
}

#side-menu li:last-child a i {
    color: #c0392b;
}

#side-menu li:last-child a:hover {
    background: #fdecea;
    border-left: 4px solid #c0392b;
}

/* =========================
   MAIN CONTENT AREA
========================= */
.content {
    margin-left: 250px;
    padding: 20px;
}
</style>

</head>

<body>

<!-- =========================
     TOP NAVBAR
========================= -->
<nav class="navbar">
    <div class="navbar-header">
        <a class="navbar-brand" href="dashboard.php">
            Clinic Records VSUA
        </a>
    </div>
</nav>

<!-- =========================
     SIDEBAR
========================= -->
<div class="sidebar">
    <ul class="nav" id="side-menu">

        <li>
            <a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>

        <li>
            <a href="#"><i class="fa fa-file"></i> Medical Records</a>
            <ul class="nav-second-level">
                <?php include_once('../model/fetchProgram.php'); ?>
                <li>
                    <a href="/medical/app/view/addprogram.php">
                        <i class="fa fa-plus-circle"></i> Add Program
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#"><i class="fa fa-user"></i> Student</a>
            <ul class="nav-second-level">
                <li><a href="addstudent.php"><i class="fa fa-plus-circle"></i> Add Student</a></li>
                <li><a href="search.php"><i class="fa fa-search"></i> Search Students</a></li>
            </ul>
        </li>

        <li>
            <a href="register.php"><i class="fa fa-files-o"></i> Register</a>
        </li>

        <li>
            <a href="manage_students.php"><i class="fa fa-users"></i> View Students</a>
        </li>

        <li>
            <a href="session.php"><i class="fa fa-calendar"></i> Session</a>
        </li>

        <li>
            <a href="change_password.php"><i class="fa fa-cog"></i> Change Password</a>
        </li>

        <li>
            <a href="admin_profile.php"><i class="fa fa-user"></i> Admin Profile</a>
        </li>

        <li>
            <a onclick="confirmLogout();">
                <i class="fa fa-sign-out"></i> Logout
            </a>
        </li>

    </ul>
</div>

<script>
function confirmLogout() {
    if (confirm("Are you sure you want to logout?")) {
        window.location.href = "../controller/logout.php";
    }
}
</script>

</body>
</html>