<html>
<?php session_start(); ?>
<head>
    <meta content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login BBL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
<nav class="navbar navbar-expand-lg nav-kleur">
        <a class="navbar-brand" href="index.html">
            <img src="image/" width="100" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Thuis <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="login.php"><img src="image/person.png">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registreer.php"><img src="image/person.png">meld je aan</a>
                </li>


            </ul>
        </div>
    </nav>
    
    <div class="login-form">

        <div class="container">

            <h2 class="form-hoofdtekst">BBL werkopdracht programma</h2>
            <br>

            <form class="form-login" method="POST" id="login-form" action="forms/registreer-form.php">

                <h2 class="form-login-hoofdtekst">Registreer</h2>
                <hr />

                <div class="form-group">
                    <label class="labelkleur">Geslacht</label>
                    <select class="form-control" name="geslacht" >
                        <option>Man</option>
                        <option>Vrouw</option></select>
                </div>

                <div class="form-group">
                <label class="labelkleur">Titel</label>
                    <select class="form-control" name="titel" >
                        <option>Mr.</option>
                        <option>Mrs.</option></select>

                </div>

                <div class="form-group">
                    <label class="labelkleur">geboortedatum</label>
                    <input type="date" class="form-control" name="geboortedatum" placeholder="Geboortedatum">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="voornaam" placeholder="Voornaam">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="tussenvoegsel" placeholder="Tussenvoegsel">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="achternaam" placeholder="Achternaam">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="straat" placeholder="straat">

                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="huisnummer" placeholder="Huisnummer">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="huisnummertoevoeging" placeholder="Huisnummertoevoeging">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="postcode" placeholder="Postcode">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="plaats" placeholder="Plaats">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="land" placeholder="Land">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="telnmr" placeholder="Telefoonnummer">

                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="mobnmr" placeholder="Mobielnummer">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">

                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="wachtwoord" placeholder="wachtwoord">

                </div>
                <hr />
                <div class="form-group flex">
                    <button type="submit" name="submit" class="btn btn-outline-primary">Registreer</button>
                </div>
                <?php

               if (isset($_SESSION['ERRORS'])) {
                echo $_SESSION['ERRORS'];
                unset($_SESSION['ERRORS']);
            }
                ?>  
                <br>
                <br>
                <a href="login.php">Al een account?</a>
            </form>
        </div>
    </div>

</body>

</html>