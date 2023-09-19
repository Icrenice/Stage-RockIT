<?php
session_start();

require_once '../src/class.php';
$admincode = new admin();
$post = $_POST;
$code = $post['code'];
// validatie checker
if (isset($_POST['submit'])) {

        // code validatie
        if (!empty($code)) {
            $uppercase = preg_match('@[A-Z]@', $code);
            $lowercase = preg_match('@[a-z]@', $code);
            $number    = preg_match('@[0-9]@', $code);
            $specialChars = preg_match('@[^\w]@', $code);
        } else {
            // mag niet leeg zijn
            $error[] = "code mag niet leeg.";
        }
        
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($code) < 8) {
            $error[] = 'code moet ten minste 8 tekens lang zijn en moet ten minste één hoofdletter, één cijfer en één speciaal teken bevatten.';
        }

//     if (isset($error)) {
//         $_SESSION['ERRORS'] = implode('<br> ', $error);
//         header('Location:../admin.php');
//     } else {
//         $admincode->create_code($code);
//         // header('Location:../login.php');
//         echo "het werkt";
// }
if (isset($error)) {
    $_SESSION['ERRORS'] = implode('<br> ', $error);
    header('Location:../login.php');
} else {
    $loggedin = $code->login($email, $password);
    if (is_bool($loggedin)) {
        //Zet code values in sessie
        $_SESSION['code_data'] = serialize($code);
        // header('Location: ../welkom.php');
        echo "het werkt";
    } elseif (is_string($loggedin)) {
        $_SESSION['ERRORS'] = $loggedin;
        header('Location: ../login.php');
    }
}
}