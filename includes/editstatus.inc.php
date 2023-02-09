<?php

session_start();

require_once ('conn.inc.php');

if(isset($_POST["statuseditsubmit"])) {
    $email = $_SESSION["email"];
    $pref = $_POST['statuseditpref'];
    $val = $_POST['statuseditoption'];
    $oid = $_GET['oid'];
    require_once ('conn.inc.php');
    require_once ('functions.inc.php'); 

    /*if(emptyInputLogin($pref, $val) !== false) {
        header("location: ../customeredit.php?error=emptyinput");
        exit();
    }*/

    if($val === "1"){
        $editquery = "UPDATE orders SET status='Pending' WHERE oid = ? ";
    }
    else if($val === "2"){
        $editquery = "UPDATE orders SET status='Delivered' WHERE oid = ? ";
    }

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $editquery)) {
        header("location: ../customeredit.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $oid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../customerorders.php");
}

else {
    header("location: ../login.php");
    exit();
}