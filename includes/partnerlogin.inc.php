<?php

if(isset($_POST["psigninsubmit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once ('conn.inc.php');
    require_once ('functions.inc.php'); 

    if(emptyInputLogin($email, $password) !== false) {
        header("location: ../partnerlogin.php?error=emptyinput");
        exit();
    }

    loginPartner($conn ,$email, $password); 
}

else {
    header("location: ../partnerlogin.php");
    exit();
}