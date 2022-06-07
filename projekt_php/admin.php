<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'konta_users';
$dsn = 'mysql:host='.$host.'; dbname='.$dbname;
$pdo = new PDO($dsn, $user, $password);          
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
   <title>Konto Administratora</title>
  <link rel="icon" href="img/background.jpg" type="image/jpg" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  

    <style>
        
        html{ height: 100%;}
body {
    /*background-color: #535fe6;*/
    
     background: url('img/background.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
     -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    font-family: "Poppins", sans-serif;
    font-weight: 300;

}
.carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.sekcja
{
    background: rgba(0, 0, 0,0.50);
    color: white;

}


    </style>


</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-50 fixed-top" ">
  <div class="container">
    <a class="navbar-brand" href="admin.php"style="color: white;" >Wrzutnia MZK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link naglowek" href="#" style="color: white;">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="baza.php" style="color: white;">Akceptacja</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="wszystkie_piosenki.php" style="color: white;">Baza piosenek</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="podsumowanie.php" style="color: white;">Podsumowanie</a>
        </li>
        <li class="nav-item">
            <?php
            echo "<a class='nav-link' href='#'' style='color: white;''>ADMINISTRATOR</a>"
            ?>
          
        </li>
        <li><a class="nav-link" href="login.php" style="color: white;">Wyloguj</a></li>
      </ul>
    </div>
  </div>
</nav>

<header>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background: url('img/1.jpg') no-repeat center center fixed;">
        <div class="carousel-caption">
          <h5>1</h5>
          <p class="h2">Dodaj własną piosenkę</p>
        </div>
      </div>
      <div class="carousel-item" style="background: url('img/2.jpg') no-repeat center center fixed;">
        <div class="carousel-caption">
          <h5>2</h5>
          <p class="h2">Poczekaj na akceptację</p>
        </div>
      </div>
      <div class="carousel-item" style="background: url('img/3.jpg') no-repeat center center fixed;">
        <div class="carousel-caption">
          <h5>3<h5>
          <p class="h2">Ciesz sie własną twórczością na steamingach</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>


<body>
<section class="py-5 sekcja">
  <div class="container">
    <h1 class="fw-light">Sprawdź statystki</h1>
    <p class="lead">Chcesz wiedzieć ilu artystów już się zarejestrowało? Ile piosenek jest na naszej platformie? <a href="podsumowanie.php" style="text-decoration: none;color:#ff00a6;text-shadow: 5px 2px 8px black">Sprawdź tutaj</a>!</p>
  </div>
</section>
</body>

</html>