<?php
require_once('../src/class.php');
// //start sessie
session_start();
// //Maak nieuw Normale persoon
$np = new Np();
//passed post variables
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];
//filter emails naar lowerstring
$email = strtolower($email);
// validatie checker
if (isset($_POST['submit'])) {

    //check email
    if (empty($email)) {
        $error[] = "Email mag niet leeg.";
    }

    // wachtwoord validatie
    if (empty($wachtwoord)) {
        $error[] = "Wachtwoord mag niet leeg.";
    }

    if (isset($error)) {
        $_SESSION['ERRORS'] = implode('<br> ', $error);
        header('Location:../login.php');
    } else {
        $loggedin = $np->login($email, $wachtwoord);
        if (is_bool($loggedin)) {
            //Zet user values in sessie
            $_SESSION['np_data'] = serialize($np);
            header('Location: ../index.html');
        } elseif (is_string($loggedin)) {
            $_SESSION['ERRORS'] = $loggedin;
            header('Location: ../login.php');
        }
    }
} 
