<?php

function emptyInputSignup($name, $email, $phone, $password, $address) {

    $result = true ;
    if(empty($name) || empty($email) || empty($phone) || empty($password) || empty($address)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $repeatpassword) {

    $result = true ;
    if($password !== $repeatpassword){
        $result = true;
    }
    else {
        $result = false;    
    }
    return $result;
}

function exists($conn, $email, $phone) {
    $sql = "SELECT * FROM customer WHERE email = ? OR phone = ?; ";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $email, $phone);
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
}

function createUser($conn, $name, $email, $phone, $password, $address) {
    $sql = "INSERT INTO customer(name, email, phone, address, password) VALUES(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=userstmtfail");
        //exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssiss",$name, $email, $phone,$address, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($email, $password) {

    $result = true ;
    if( empty($email) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn ,$email, $password) {
    $emailExists = exists($conn, $email, $email);

    if($emailExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);
    if($checkPwd === false) { 
        header("location: ../login.php?error=pwdmatchfail");
        exit();
    }  
    else if($checkPwd === true) {   
        session_start();
        $_SESSION["partner"] = false;
        $_SESSION["email"] = $emailExists["email"];
        $_SESSION['id'] = $emailExists["id"];
        header("location: ../index.php");
        exit();
    }  
}

function createPartner($conn, $name, $email, $phone, $password, $address) {
    $sql = "INSERT INTO seller(name, email, phone, address, password) VALUES(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=userstmtfail");
        //exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssiss",$name, $email, $phone,$address, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../partnersignup.php?error=none");
    exit();
}

function Partnerexists($conn, $email, $phone) {
    $sql = "SELECT * FROM seller WHERE email = ? OR phone = ?; ";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../partnersignup.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $email, $phone);
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
}

function loginPartner($conn ,$email, $password) {
    $emailExists = Partnerexists($conn, $email, $email);

    if($emailExists === false) {
        header("location: ../partnerlogin.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);
    if($checkPwd === false) { 
        header("location: ../partnerlogin.php?error=pwdmatchfail");
        exit();
    }  
    else if($checkPwd === true) {   
        session_start();
        $_SESSION["partner"] = true;
        $_SESSION["email"] = $emailExists["email"];
        $_SESSION['id'] = $emailExists["id"];
        header("location: ../index.php");
        exit();
    }  
}

function editPartner($conn, $pref, $val) {
    if($pref === "1"){
        $editquery = "UPDATE seller SET name = ? WHERE email = ? ";
    }
    else if($pref === "2"){
        $editquery = "UPDATE seller SET email = ? WHERE email = ? ";
    }
    else if($pref === "3"){
        $editquery = "UPDATE seller SET phone = ? WHERE email = ? ";
    }
    else if($pref === "4"){
        $editquery = "UPDATE seller SET address = ? WHERE email = ? ";
    }
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $editquery)) {
        header("location:    ../partneredit.php?error=stmtfail");
        exit();
    }

    $email = $_SESSION["email"];    
    mysqli_stmt_bind_param($stmt, "ss", $val, $email);
    mysqli_stmt_execute($stmt);
} 
use phpmailer\PHPMailer\PHPMailer;
function ordermailpartner($conn, $emails) {

$name = 'Wired.com';
$email = $emails;
$subject = 'New order';
$body = '<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: black;" leftmargin="0">
<!--100% body table--> 
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
    <tr>
        <td>
            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                      <a href="localhost/wired" title="logo" target="_blank">
                        <img  width="300" src="https://i.ibb.co/GFvPQ84/WIRED-hz.png " title="logo" alt="logo">
                      </a>
                    </td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding:0 35px;">
                                    <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">Congratulations!
                                    You have a new Order</h1>
                                    <span
                                        style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                    <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                        Click on the button below to view your orders
                                    </p>
                                    <a href="localhost/wired/order.php"
                                        style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">
                                        <h3 style="color:black;">View order</h3> </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>';

require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require_once 'phpmailer/Exception.php';

$mail = new PHPMailer();

date_default_timezone_set('Etc/UTC');
$mail -> isSMTP(true);
$mail -> Host = gethostbyname('ssl://smtp.gmail.com'); 
$mail -> SMTPAuth = true;
$mail -> Username = 'saltandpeppercuisine6@gmail.com';
$mail -> Password = 'Tg$$$666';
$mail -> Port = 465;
$mail -> SMTPSecure = "ssl";

$mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);

$mail -> isHTML(true);
$mail -> setFrom($email, $name);
$mail ->addAddress($email);
$mail -> Subject = ("$subject");
$mail -> Body = $body;
//$_SESSION['code'] =NULL;

if($mail->send()) {
    $status = "success";
    return $status;
}
else {
    $status = "failed";
    $response = "Wrongc" . $mail ->ErrorInfo;
    echo $response;
}
}