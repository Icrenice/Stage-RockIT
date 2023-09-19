<html>
<?php session_start(); ?>

<head>
    <meta content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login BBL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css" type="text/css" />
</head>

<body>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="test.php"><img src="img/logo2.png"></a>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link  text-light" href="test.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="login.php">Login</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="login-form mt-4">

            <div class="container">

                <h2 class="form-hoofdtekst">BBL werkopdracht programma</h2>
                <br>

                <form class="form-login" method="POST" id="login-form" action="forms/login-form.php">

                    <h2 class="form-login-hoofdtekst">Login</h2>
                    <hr />

                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">

                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="wachtwoord" placeholder="wachtwoord">

                    </div>

                    <hr />
                    <div class="form-group flex">
                        <button type="submit" name="submit" class="btn btn-color">Login</button>
                    </div>
                    <br>
                    <?php

                    if (isset($_SESSION['ERRORS'])) {
                        echo $_SESSION['ERRORS'];
                        unset($_SESSION['ERRORS']);
                    }
                    ?>
                    <br>
                    <a href="register.php">Account aanmaken?</a>
                </form>
            </div>
        </div>


        <!-- Footer -->
        <footer class="page-footer font-small pt-4 text-center">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Call to action -->
                <ul class="list-unstyled list-inline text-center py-2">
                    <li class="list-inline-item">
                        <h5 class=" text-white mb-1">Registreer gratis</h5>
                    </li>
                    <li class="list-inline-item">
                        <a href="register.php" class="btn btn-outline-light btn-rounded">Registreer!</a>
                    </li>
                </ul>
                <!-- Call to action -->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-white text-center py-3">© 2020 Copyright:
                <a class="text-white" href="#"> RockIT</a>
            </div>
            <!-- Copyright -->

        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>