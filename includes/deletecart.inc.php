<?php
session_start();
if(isset($_GET['pid']) and isset($_SESSION['email']))
{   
    require_once 'conn.inc.php';
    $sql = "DELETE FROM cart WHERE pid= ? and cid= ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        $status=true;
    }
    else {
        $status = false;
    }

    mysqli_stmt_bind_param($stmt, "ii", $_GET['pid'], $_SESSION['id']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../cart.php");
}   
