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
   <title>Dodaj utwor</title>
  <link rel="icon" href="img/background.jpg" type="image/jpg" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">



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
.height {
    height: 100vh
}

.card {
    margin-top: 50px;
    border-radius: 20px;
    border:0.1px solid #ff00a6;
    padding: 20px;
    background: rgba(0, 0, 0,0.80);
    color: #fff


}


.form-input {
    position: relative;
    margin-bottom: 10px;
    margin-top: 10px

}

.form-input i {
    position: absolute;
    font-size: 18px;
    top: 15px;
    left: 10px
}

.form-control {

    height: 50px;
    background-color: #1c1e21;
    text-indent: 24px;
    font-size: 15px
    color:#fff;
}

.form-control:focus {
    background-color: #25272a;
    box-shadow: none;
    color: #fff;
    border-color: #4f63e7
}

.form-check-label {
    margin-top: 2px;
    font-size: 14px
}

.signup {
    height: 50px;
    font-size: 14px


}
    </style>


</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-50 fixed-top" ">
  <div class="container">
    <a class="navbar-brand" href="content.php"style="color: white;" >Wrzutnia MZK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link naglowek" href="content.php" style="color: white;">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dodaj_utwor.php" style="color: white;">Dodaj utwór</a>
        </li>
        <li><a class="nav-link" href="dodane.php" style="color: white;">Dodane utwory</a></li>
        <li class="nav-item">
            <?php
            session_start();
            $log= $_SESSION['mail_login'];
            echo "<a class='nav-link' href='#'' style='color: white;''>Witaj ".$log."</a>"
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

<div class="container mt-5 mb-5 "  >

    <div class="row d-flex align-items-center justify-content-center">

        <div class="col-md-5  ">
<form action="" method="post">
            <div class="card px-5 py-5 "> 

                <h4 class="mt-3">Dodaj swoją muzykę!<br></h4>
                <form class="card px-5 py-5" action="" method="post">
                <div class="form-input"> <i class="fa fa-envelope"></i> <input type="text" name="wyk" id="wyk" class="form-control" placeholder="Wykonawca"> </div>
                <div class="form-input"> <i class="fa fa-lock"></i> <input type="text" name="tyt" id="tyt" class="form-control" placeholder="Tytuł"> </div> 
                <button class="btn btn-primary mt-4 signup">Dodaj</button>

                <?php
                
                    if(isset($_POST['wyk']))
                    {
                        $wykonawca = $_POST['wyk'];
                        $tytul = $_POST['tyt'];
                        if(empty($wykonawca) || empty($tytul))echo "<p style=color:red><br> Wszystkie pola nie zostały wypełnione </p>";
                          else{
                           
                            $sql2 = "insert into dodaj set wykonawca = '$wykonawca', tytul='$tytul', email='$log'";
                            $stmt2 = $pdo->prepare($sql2);
                            $stmt2->execute();

                            echo "<p style=color:green><br> Pomyślnie dodano piosenke </p>";
                        }


                    }

                ?>

                </form>
               <br>
               <div class=""> <span>Masz już dodane piosenki?</span> <a href="dodane.php" class="text-decoration-none">Sprawdź je tutaj</a> </div>
            </div>
            
        </div>
    </div>
</div>
</body>

</html>