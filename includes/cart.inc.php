<?php
use parallel\Events\Event\Type;

session_start();
if(isset($_SESSION['email'])) {

require_once 'conn.inc.php';
if(isset($_POST["cartsubmit"])) {
    $qty = $_POST["qty"];
    $email = $_SESSION['email'];
    $sql = "INSERT INTO cart VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        $status=true;
    }
    else {
        $status = false;
    }

    mysqli_stmt_bind_param($stmt, "iii", $_SESSION['pid'], $_SESSION['id'], $qty);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../cart.php");
    /*
    require_once ('conn.inc.php');
    require_once ('functions.inc.php'); 

    if(emptyInputLogin($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn ,$email, $password); 
}

else {
    header("location: ../login.php");
    exit();*/
}
}
else {
    echo "ERROR: INVALID ACCESS";
}
