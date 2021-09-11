<?php
require_once("phpmailer/src/PHPmailer.php");
require_once("phpmailer/src/Exception.php");
require_once("phpmailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{

    $pm->SMTPDebug = 2;
    $pm->isSMTP(true);
    $pm->Host = "mail.server.com";
    $pm->SMTPAuth = true;
    $pm->Username = "rahmanrayhan817@gmail.com";
    $pm->Password = "********";
    $pm->SMTPSecure = "tls";
    $pm->Port = 587;

    $pm->setFrom("rahmanrayhan817@gmail.com");
    $pm->addAddress("rahmanrayhan817@gmail.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Here is the invoice from your last purchase";
    $pm->isHTML(true);
    $pm->send();

    echo "Mail Sent";
}catch (Exception $e){
    echo "Failed ".$pm->ErrorInfo;
}