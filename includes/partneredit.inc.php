<?php

session_start();

require_once ('conn.inc.php');

if(isset($_POST["peditsubmit"])) {
    $email = $_SESSION["email"];
    $pref = $_POST['peditpref'];
    $val = $_POST['peditval'];
    require_once ('conn.inc.php');
    require_once ('functions.inc.php'); 

    if(emptyInputLogin($pref, $val) !== false) {
        header("location: ../partneredit.php?error=emptyinput");
        exit();
    }

    if($pref === "1"){
        $editquery = "UPDATE seller SET name = ? WHERE email = ? ";
    }
    else if($pref === "3"){
        $editquery = "UPDATE seller SET phone = ? WHERE email = ? ";
    }
    else if($pref === "4"){
        $editquery = "UPDATE seller SET address = ? WHERE email = ? ";
    }
    else if($pref === "5" ){
        $editquery = "UPDATE seller SET password = ? WHERE email = ? ";
        $hashedPwd = password_hash($val, PASSWORD_DEFAULT);
        $val = $hashedPwd;
    }

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $editquery)) {
        header("location: ../partneredit.php?error=stmtfail");
        exit();
    }

    if($pref !== "3") {mysqli_stmt_bind_param($stmt, "ss", $val, $email); }
    else { mysqli_stmt_bind_param($stmt, "is", $val, $email);}
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../partnerprofile.php");
}

else {
    header("location: ../partnerlogin.php");
    exit();
}