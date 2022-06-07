<?php
$db = mysqli_connect('localhost', 'root', '', 'konta_users');       


         
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
   <title>Akceptacja</title>
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
table{
  margin-top: 120px;
}
.dodaaaj{
font-size:30px;
color: white;
text-align: center;
margin-top: 200px;
text-shadow: 2px 0 0 black, 0 2px 0 black, 1px 1px black;
}
.container { position:relative; }
.card{
float: left;
margin-top: 300px;

margin-left: 12%;
}
.karta{
  text-align: center;
  font-size: 75px;
  text-shadow: 2px 0px 2px red, 0 2px 0 black, 1px 1px black;
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
          <a class="nav-link naglowek" href="admin.php" style="color: white;">Strona Główna</a>
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
</header>


<body>
   <?php
    $request = "SELECT * FROM dodane group by wykonawca";
    $request2 = "SELECT * FROM dodane";
    $request3 = "SELECT * FROM konta group by mail";
    $result =  mysqli_query($db,$request);
    $result2 =  mysqli_query($db,$request2);
    $result3 =  mysqli_query($db,$request3);
    $rowcount=mysqli_num_rows($result);
    $rowcount2=mysqli_num_rows($result2);
    $rowcount3=mysqli_num_rows($result3);
   echo " 
<div class='container' >
<div class='card text-white bg-secondary mb-3' style='max-width: 18rem;'>
  <div class='card-header bg-dark'>Liczba wykonawców</div>
  <div class='card-body'>
    <h5 class='card-title'></h5>
    <p class='card-text karta'>".$rowcount."</p>
  </div>
</div>

<div class='card text-white bg-secondary mb-3' style='max-width: 18rem;'>
  <div class='card-header bg-dark'>Liczba dodanych piosenek</div>
  <div class='card-body'>
    <h5 class='card-title'></h5>
    <p class='card-text karta'>".$rowcount2."</p>
  </div>
</div>

<div class='card text-white bg-secondary mb-3' style='max-width: 18rem;'>
  <div class='card-header bg-dark'>Liczba założonych kont</div>
  <div class='card-body'>
    <h5 class='card-title'></h5>
    <p class='card-text karta'>".$rowcount3."</p>
  </div>
</div>
</div>";
  
    
      
      
  ?>

</body>

</html>