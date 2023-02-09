<?php

require_once ('conn.inc.php');
require_once ('functions.inc.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $address = $_POST['address'];

    if(emptyInputSignup($name, $email, $phone, $password, $address) !== false) {
        header("location: ../partnersignup.php?error=emptyinput");
        exit();
    }

    if(pwdMatch($password, $repeatpassword) !== false) {
        header("location: ../partnersignup.php?error=pwdmatchfail");
        exit();
    }

    if(Partnerexists($conn, $email, $phone) !== false)
    {
        header("location: ../partnersignup.php?error=emailerror");
        exit();
    }

    createPartner($conn, $name, $email, $phone, $password, $address);

}

else {
    header("location: ../partnersignup.php");
}