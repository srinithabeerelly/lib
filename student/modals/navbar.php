<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- Tailwind CSS CDN -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Boot Strap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Online Library Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navItems">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navItems">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="books.php" class="nav-link">BOOKS</a>
          </li>
          <li class="nav-item">
            <a href="feedback.php" class="nav-link">FEEDBACK</a>
          </li>
          <?php
          if (isset($_SESSION['login_user'])) {
          ?>
            <li class="nav-item">
              <a href="profile.php" class="nav-link">PROFILE</a>
            </li>
           
            <li class="nav-item">
              <a href="logout.php" class="nav-link"><i class="bi bi-box-arrow-right me-2" style="color: white;"></i>LOGOUT</a>
            </li>

          <?php } else {   ?>
            <li class="nav-item">
              <a href="student_login.php" class="nav-link"><i class="bi bi-box-arrow-in-right me-2" style="color: white;"></i>LOGIN</a>
            </li>
          <?php } ?>
        </ul>
      </div>
  </nav>
  <?php
  if (isset($_SESSION['login_user'])) {
    $day = 0;
    $exp = '<p style="color:yellow; background-color:red;">EXPIRED</p>';
    $res = mysqli_query($db, "SELECT * FROM `issue_book` where username ='$_SESSION[login_user]' and approve ='$exp' ;");

    while ($row = mysqli_fetch_assoc($res)) {
      $d = strtotime($row['return']);
      $c = strtotime(date("Y-m-d"));
      $diff = $c - $d;

      if ($diff >= 0) {
        $day = $day + floor($diff / (60 * 60 * 24));
      } //Days

    }
    $_SESSION['fine'] = $day * .10;
  }
  ?>