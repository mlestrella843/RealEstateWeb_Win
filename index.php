<?php include('connection.php');?>
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
    <!--Header color Blue, and telephone-->
  <!-- <header class="container-fluid bg-primary d-flex justify-content-center " id="header-color" >
    <p class="text-light mb-0 p-2 fs-6" id="header-color">Contact Us 1-(587)-444-4444</p>
  </header> -->
<!--Nav Bar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <span class="text-secondary fs-4 fw-bold">Dreamer Real Estate</span> 
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
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" href="session.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav_bar_menu fs-5 fw-bold" href="closeSession.php">Sign Out</a>
        </li>
      </ul>

       <form class="d-flex">
        <input class="form-control me-2 text-primary fs-5 fw-bold" type="email" placeholder="email" aria-label="email">
        <button class="btn btn-secondary btn-primary-outline-success text-nav_bar_menu fs-5 fw-bold text-white" type="button">Subscribe</button>
      </form> 

    </div>
  </div>
</nav>

<!--Slider-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/04_4.png" class="d-block w-100" alt="slide1">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/6_6.png" class="d-block w-100" alt="slide2">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/07_7.png" class="d-block w-100" alt="slide3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-----Sections----------------->

<section class="w-50 mx-auto text-center pt-5" id="intro">
  <h1 class="p-3 fs-2 border-top border-3">We are an Unique <span class="text-secondary">Dreamer Real Estate</span></h1>
  <p><span class="text-primary">Dreamer Real Estate</span> we are Lorem ipsum dolor sit amet, consectetur
   adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
  ea commodo consequat.</p>
</section>

<!-----Services----------------->

<section class="container-fluid">

  <div class="row w-75 mx-auto my-5 servicio-fila"> 
    <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap border border-dark">
      <img src="images/house1.jpeg" class="rounded" alt="rent" width="180" height="160">
      <div> 
      <h3 class="fs-5 mt-4 px-4 pb-1">Rent</h3>
      <p class="px-4">We Rent all kind of properties, houses, condos, apartments, in different countries</p>
      </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap border border-dark">
      <img src="images/house2.jpeg" class="rounded" alt="rent" width="180" height="160">
      <div>
      <h3 class="fs-5 mt-4 px-4 pb-1">Sale</h3>
      <p class="px-4">We Sale all kind of properties, houses, condos, apartments, in different countries</p>
    </div>
  </div>
</div>

<div class="row w-75 mx-auto my-5 servicio-fila"> 
   <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap border border-dark">
     <img src="images/house3.jpeg" class="rounded" alt="rent" width="180" height="160">
     <div> 
     <h3 class="fs-5 mt-4 px-4 pb-1">Consulting</h3>
     <p class="px-4">We offer consulting to all kind of properties, houses, condos, apartments, in different countries</p>
     </div>
   </div>

   <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap border border-dark">
     <img src="images/house5.jpeg" class="rounded" alt="rent" width="180" height="160 border border-dark">
     <div>
     <h3 class="fs-5 mt-4 px-4 pb-1">Design</h3>
     <p class="px-4">We offer Desing to all kind of properties, houses, condos, apartments, in different countries</p>
   </div>
 </div>
</div>

</section>

<!-----About Us----------------->
<section> 
  <div class="w-75 m-auto text-center" id="team">
    <h1 class="mb-5 fs-2"> Team with great <span class="text-seconday"> Skills for you</span></h1>
      <p class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat.
      </p>
  </div>
  <div class="mt-5 text-center"> 
    <img class="img-fluid" src="images/team1.jpg" alt="team" alt="rent" width="800px" height="auto">
  </div>
  <br/>
  <br/>
  <br/>
</section>

  <!-----Map----------------->
<section class="local border-top border-3"> 
  <div class=" row">
    <!-- div for Map Image -->
        <div class="col-6">
            <div><img src="Images/map2.png" alt="map" width="100%" height="500px" class="mt-5 mb-5 d-flex"></div>
        </div>
    
    <!-- div for Information -->
        <div class="col-6 wrapper">
            <h2 class= "mt-5 mb-5">Ubicated in Calgary, AB, Canada</h2>
            <h2 class="text-secondary mb-4" id="typewriter"></h2>
            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
  </div>
</section>

 <!-----Seccion Form----------------->

<section id="contact-section" class="border-top border-3">

    <!-- <div id="bg-contact">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,250.7C480,245,600,203,720,170.7C840,139,960,117,1080,122.7C1200,
    128,1320,160,1380,176L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,
    320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div> -->
  <div class="container">
      <div class="text-center mb-4 mt-5" id="title-form">
        <div><img src="Images/support.png" alt="contact" width="500px" height="auto"></div>
        <h2>Contacts</h2>
        <p class="fs-5">Estamos aqui para hacer realidad de que tengas la casa sonada</p>
      </div>
      <form action="" class="container-fluid w-50">
          <div class="mb-3">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="name" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" id="tel" placeholder=" 000-000-0000 " required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message"></textarea>
          </div>
          <div class="mb-3">
            <button type="button" class="btn btn-secondary w-100 fs-5 text-white ">Send your message...</button>
          </div>
      </form>
  </div>
  
  </section>

<!-----Footer----------------->

<footer class="w-100 d-flex align-items justify-content-center flex-wrap bg-primary p-5 text-white">
  <p class="fs-5 px-3 pt-3">Dreamers Real Estate. &copy; All rigths reserved 2023</p>
   <div id="icons">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
   </div>

</footer>

  <!-- SCRIPTS Bootstrap and Javascript, Jquery-->  
  <script  src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script  src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="~/Scripts/modernizr-2.8.3.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap for Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- typewriter pluggin for Javascript-->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>"
    <!-- local javascript file for Javascript-->
    <script src="main.js"></script>

</body>
</html>