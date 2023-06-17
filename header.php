<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

 <!-- Respinsive and fonts -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <!-- <header class="container-fluid bg-secondary d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-6">Contact Us 1-(587)-444-4444</p>
  </header> -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <span class="text-primary fs-4 fw-bold">Dreamer Real Estate</span> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" href="projects.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" href="adminSite.php">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" href="closeSession.php">Sign Out</a>
        </li>
      </ul>

      <form class="d-flex">
        <input class="form-control me-2 text-primary fs-5" type="text" name="search" placeholder="Find a property" aria-label="search" autocomplete="search">
        <button class="btn btn-secondary btn-primary-outline-success text-nav_bar_menu fs-5 fw-bold" type="button">Search</button>
      </form>

    </div>
  </div>
</nav>

</body>

</html>