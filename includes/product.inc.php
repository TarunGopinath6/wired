<?php

require_once ('conn.inc.php');


$productQuery = "SELECT * FROM product where pid = ?";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $productQuery)) {
    header("location: ../index.php?error=prodfail");
    exit();
}
echo 
mysqli_stmt_bind_param($stmt, "i", $_GET['pid']);
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
