<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../backend/login-register.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../backend/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <header class="header">
        <div class="logo-menu">
            <img src="../assets/logo1.webp" alt="DILG Logo">
            <div class="header-info">
                <div class="header-title">ULATLINK</div>
            </div>
        </div>

        <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
        <a href="../backend/logout.php">
            <span class="link_name">Logout</span>
       </a>
</header>

<aside>
   <div class="box">
        <h1>Welcome, <span><?= $_SESSION['name'];?>!</span></h1>
        <p>This is the <span>admin</span> page.</p>
    </div>
</aside>

<div class="sidebar">
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Barangays</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Announcements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Events Calendar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Reports</a>
  </li>
</ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
