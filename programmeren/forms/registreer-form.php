<?php
session_start();

require_once '../src/class.php';
$np = new Np();
$post = $_POST;
$geslacht = $post['geslacht'];
$titel = $post['titel'];
$geboortedatum = $post['geboortedatum'];
$voornaam = $post['voornaam'];
$tussenvoegsel = $post['tussenvoegsel'];
$achternaam = $post['achternaam'];
$straat = $post['straat'];
$huisnummer = $post['huisnummer'];
$huisnummertvg = $post['huisnummertoevoeging'];
$postcode = $post['postcode'];
$plaats = $post['plaats'];
$land = $post['land'];
$telnmr = $post['telnmr'];
$mobnmr = $post['mobnmr'];
$email = $post['email'];
$wachtwoord = $post['wachtwoord'];
// validatie checker
if (isset($_POST['submit'])) {

    //check geslacht
    if (empty($geslacht)) {
        $error[] = "Kies een geslacht.";
    }   

    //check titel
    if (empty($titel)) {
        $error[] = "Hoe wilt u benoemd worden.";
    }   

    //check geboortedatum
    if (empty($geboortedatum)) {
        $error[] = "Vul uw geboortedatum in.";
    }   

    //check voornaam
    if (!empty($voornaam)) {
        $firstname_subject = $voornaam;
        $firstname_pattern = '/^[a-zA-Z ]*$/';
        $firstname_match = preg_match($firstname_pattern, $firstname_subject);
        if ($firstname_match !== 1) {
            $error[] = "Voornaam mag alleen alfabetisch, steepjes en spaties bevatten";
        }
    } else {
        // mag niet leeg zijn
        $error[] = "Voornaam mag niet leeg.";
    }

    //check achternaam
    if (!empty($achternaam)) {
        $lastname_subject = $achternaam;
        $lastname_pattern = '/^[a-zA-Z ]*$/';
        $lastname_match = preg_match($lastname_pattern, $lastname_subject);
        if ($lastname_match !== 1) {
            $error[] = "Achternaam mag alleen alfabetisch, steepjes en spaties bevatten";
        }
    } else {
        // mag niet leeg zijn
        $error[] = "Achternaam mag niet leeg.";
    }

    //check straat
    if (empty($straat)) {
        $error[] = "Straat mag niet leeg.";
    }   

    //check huisnummer
    if (empty($huisnummer)) {
        $error[] = "huisnummer mag niet leeg.";
    }

    //check postcode
    if (empty($postcode)) {
        $error[] = "Postcode mag niet leeg.";
    }

    //check plaats
    if (empty($plaats)) {
        // mag niet leeg zijn
        $error[] = "plaats mag niet leeg.";
        }

        //check land
    if (empty($land)) {
        // mag niet leeg zijn
        $error[] = "land mag niet leeg.";
        }
    

    //check telnmr
    if (empty($telnmr)) {
        // mag niet leeg zijn
        $error[] = "Telefoonnummer mag niet leeg.";
        }
    

    //check email
    if (empty($email)) {
        // mag niet leeg zijn
        $error[] = "Email mag niet leeg.";
        }
    

    // wachtwoord validatie
    if (empty($wachtwoord)) {
        // mag niet leeg zijn
        $error[] = "Wachtwoord mag niet leeg.";
    }

    if (isset($error)) {
        $_SESSION['ERRORS'] = implode('<br> ', $error);
        header('Location:../registreer.php');
    } else {
        $np->create($geslacht, $titel, $geboortedatum, $voornaam, $tussenvoegsel, $achternaam, $straat, $huisnummer, $huisnummertvg, $postcode, $plaats, $land, $telnmr, $mobnmr, $email, $wachtwoord);
        header('Location:../login.php');
}
}