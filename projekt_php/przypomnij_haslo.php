<!DOCTYPE html>
<html lang="en">
<head>
  <title>Przypomnij hasło</title>
  <link rel="icon" href="img/background.jpg" type="image/jpg" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
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


.height {
    height: 100vh
}

.card {

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
<body>

<div class="container mt-5 mb-5 "  >

    <div class="row d-flex align-items-center justify-content-center">

        <div class="col-md-5  ">
<form action="" method="post">
            <div class="card px-5 py-5 "> 

                <h4 class="mt-3">Resetowanie hasła<br><h5>podaj addres e-mail</h5></h4> <small class="mt-2 text-muted">Na podany adres e-mail otrzymasz link do zresetowania hasła</small>
                <form class="card px-5 py-5" action="" method="post">
                <div class="form-input"> <i class="fa fa-envelope"></i> <input type="text" name="email" id="email" class="form-control" placeholder="Email address"> </div>
                <button class="btn btn-primary mt-4 signup">Resetuj</button>

                <?php
                
                    if(isset($_POST['email']))
                    {
                        $host = 'localhost';
                        $user = 'root';
                        $password = '';
                        $dbname = 'konta_users';

                        $dsn = 'mysql:host='.$host.'; dbname='.$dbname;
                        $pdo = new PDO($dsn, $user, $password);
                      

                        $email = $_POST['email'];

                        if(empty($email))echo "<p style=color:red><br> Wszystkie pola nie zostały wypełnione </p>";
                          else{
                        $czy_istnieje="select mail from konta where mail = '$email'";
                        $stmt_czy = $pdo->prepare($czy_istnieje);
                        $stmt_czy->execute();


                        if(($stmt_czy->fetch(PDO::FETCH_ASSOC)))
                        {
                            session_start();
                            $_SESSION['mail_reset'] = $email;
                            header("location: reset.php");
                        } 
                        else echo "<p style=color:red><br> Nie istnieje żadne konto na podanym adresie e-mail </p>";
                        }


                    }

                ?>

                </form>
               
                <div class="text-center mt-4"> <span>Nie masz konta?</span> <a href="index.php" class="text-decoration-none">Załóż własne konto</a> </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
