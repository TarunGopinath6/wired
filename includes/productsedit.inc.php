<?php

session_start();

require_once ('conn.inc.php');

if(isset($_POST["prodeditsubmit"])) {
    $email = $_GET['pid'];    
    $pref = $_POST['prodeditpref'];
    $val = $_POST['prodeditval'];
    require_once ('conn.inc.php');
    require_once ('functions.inc.php');
    echo $email;
    echo $pref;
    echo $val;


    /*if(emptyInputLogin($pref, $val) !== false) {
        header("location: ../productsedit.php?error=emptyinput");
        exit();
    }*/

    if($pref === "1"){
        $editquery = "UPDATE product SET name = ? WHERE pid = ? ";
    }
    else if($pref === "2"){
        $editquery = "UPDATE product SET price = ? WHERE pid = ? ";
    }
    else if($pref === "3"){
        $editquery = "UPDATE product SET description = ? WHERE pid = ? ";
    }
    else if($pref === "4"){
        $vali = $_POST['prodeditpic'];
        $editquery = "UPDATE product SET image = ? WHERE pid = ? ";
    }

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $editquery);
    /*if(mysqli_stmt_prepare($stmt, $editquery)) {
        header("location: ../productsedit.php?error=stmtfail");
        exit();
    }*/

    if($pref === "4") {mysqli_stmt_bind_param($stmt, "bs", $vali, $email); }
    else if ($pref === "2") { mysqli_stmt_bind_param($stmt, "is", $val, $email);}
    else { mysqli_stmt_bind_param($stmt, "ss", $val, $email);}
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../products.php");
}

else {
    header("location: ../login.php");
    exit();
}