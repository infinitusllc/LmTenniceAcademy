<?php

session_start();

if (isset($_POST['submit'])) {
    $secretKey = "6LcI9mkUAAAAAFwNoTsg8KDKc6V5KFKj3FmIDFA6";
    $response_key = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response_key&remoteop=$userIP";
    $response = file_get_contents($url);
    $response = json_decode($response);
    if (!$response->success) {
        header("Location: ../mail.php?error");
        exit();
    }

    include "dbc.inc.php";

    $e_mail = mysqli_real_escape_string($conn, $_POST['e_mail']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    date_default_timezone_set('Europe/Samara');
    $time = date('c');

    $to = "tennisacademy@ymail.com";
    $subject = "message from Leila Meskhi Tennis Academy: ".$subject;

    $message = $msg."\n\n\n sent by: ".$e_mail;

    // More headers
    $headers .= 'From: <$e_mail>' . "\r\n";

    mail($to,$subject,$message,$headers);

    header("Location: ../mail.php?success");
    exit();
}