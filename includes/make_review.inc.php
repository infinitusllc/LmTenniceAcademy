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
        header("Location: ../reviews.php?error");
        exit();
    }

    include "dbc.inc.php";

    $e_mail = mysqli_real_escape_string($conn, $_POST['e_mail']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);
    date_default_timezone_set('Europe/Samara');
    $time = date('c');

    if (strlen($review) <= 0) { //empty comment
        header("Location: ../reviews.php?error");
        exit();
    }

    $sql = "INSERT INTO reviews (`e-mail`, subject, review, time) 
                          VALUES ('$e_mail', '$subject', '$review', '$time')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../reviews.php");
        exit();
    } else {
        echo $sql;
        header("Location: ../reviews.php?error");
        exit();
    }
}