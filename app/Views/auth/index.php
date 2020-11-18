<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>EXO WE ARE ONE</title>
  </head>
  <body>

    <!-- Awal Navbar -->

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/index'); ?>">Home</a>
      </li>
       <li class="nav-item">
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/login'); ?>">Log out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/admin'); ?>">Admin</a>
      </li>
    </ul>
  </div>
</div>
</nav>

    <!-- Akhir Navbar -->

    <!-- Awal Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img src="/img/exologo.png"width="150px"class="rounded">
    <h1 class="display-4">EXO</h1>
     <p class="lead">Tucil by Arafia Isnayu Akaf-1817051021</p>
    <p class="lead">S1 Ilmu Komputer Angkatan 2018 Universitas Lampung.</p>
  </div>
</div>
    <!-- Akhir Jumbotron -->
  <div class="container text-center">
    <h1>ABOUT EXO</h1>

    <!-- Awal About -->
    <div class="container">
        <div class="card" style="width: 18rem;">
  <img src="/img/exo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BIOGRAFI EXO</h5>
    <p class="card-text">Berikut adalah Biografi EXO.</p>
    <a href="<?= base_url('auth/exo'); ?>" class="btn btn-primary">Klik Here</a>
  </div>
</div>
</div>

   
    <!-- Akhir About -->


<script src="/js/bootstrap.bundle.min.js"></script>



  </body>
</html>