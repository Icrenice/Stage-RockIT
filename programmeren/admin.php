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

            <form class="form-login" method="POST" id="login-form" action="forms/admincode-form.php">

                <h2 class="form-login-hoofdtekst">admin</h2>
                <hr />

                <div class="form-group">
                    <input type="password" class="form-control" name="code" placeholder="code">

                </div>

                <hr />
                <div class="form-group flex">
                    <button type="submit" name="submit" class="btn btn-outline-primary">Login</button>
                </div>
                <?php

                if (isset($_SESSION['ERRORS'])) {
                    echo $_SESSION['ERRORS'];
                    unset($_SESSION['ERRORS']);
                }
                ?>
                <br>
                <br>
                <a href="registreer.php">Account aanmaken?</a>
            </form>
        </div>
    </div>

</body>

</html>