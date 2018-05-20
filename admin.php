<head>
    <title> ადმინის გვერდი </title>
    <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/adminStyle.css">
</head>

<body>
<div class="topnav">
    <a href="admin.php?tab=tours">ტურები</a>
    <a href="admin.php?tab=combinations">კომბინაციები</a>
    <a href="admin.php?tab=translations">თარგმნა</a>
    <a href="admin.php?tab=slides">სლაიდები</a>
    <a href="admin.php?tab=generic">generic გვერდები</a>
    <a href="admin.php?tab=header">ჰედერის ლინკები</a>
    <a href="index.php" style="float: right">საიტზე დაბრუნება</a>
</div>


<?php

    session_start();
    $user = $_SESSION['user'];
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
//    if($user['is_admin'] != 1) {
//        header("Location: index.php");
//        exit();
//    }
//
    $tab = "tours";
    if (isset($_GET['tab']))
        $tab = $_GET['tab'];

    include "mods/admin/$tab.mod.php";
?>

</body>