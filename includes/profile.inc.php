<?php

require_once ('conn.inc.php');

$email = $_SESSION["email"];
$profileQuery = "SELECT * FROM customer WHERE email = ?;";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $profileQuery)) {
    header("location: ../index.php?error=profilefail");
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)) {
    mysqli_stmt_close($stmt);
    return $row;
}
else {
    $result = false;
    mysqli_stmt_close($stmt);
    return $result;
}
