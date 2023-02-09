<?php
    require_once 'conn.inc.php';
    require_once 'functions.inc.php';
    $stmt = mysqli_stmt_init($conn);
    $cartsel = "SELECT * FROM cart where cid = '".$_SESSION['id']."';";
    $resultcartsel = mysqli_query($conn, $cartsel);
    $resultCheck = mysqli_num_rows($resultcartsel);
    while($row = mysqli_fetch_assoc($resultcartsel))
    {
        $prod = "SELECT * FROM product WHERE pid = '".$row['pid']."';";
        $resultprod = mysqli_query($conn, $prod);
        $rowprod = mysqli_fetch_assoc($resultprod);
        $ordersins = "INSERT INTO orders(pid, sid, cid, qty, status) VALUES('".$row['pid']."', '".$rowprod['sid']."', '".$row['cid']."', '".$row['qty']."', 'Pending') ;";
        $resultordersins = mysqli_query($conn, $ordersins);
        $partnerfetch = "SELECT * FROM seller WHERE id='".$rowprod['sid']."';";
        $resultpartnerfetch = mysqli_query($conn, $partnerfetch);
        $rowpartnerfetch = mysqli_fetch_assoc($resultpartnerfetch);
        ordermailpartner($conn, $rowpartnerfetch['email']);
    }

    $delcart = "DELETE FROM cart where cid= '".$_SESSION['id']."';";
    $resultdelcart = mysqli_query($conn, $delcart);
    require_once 'ordermailcustomer.inc.php';
    