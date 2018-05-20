<?php
    $dbServername = "91.212.213.31";
    $dbUsername = "pepoge_user";
    $dbPassword = "bU63el6t3P";
    $dbName = "pepoge_tennis";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    mysqli_set_charset($conn,"utf8");
//
//    $dbServername = "localhost";
//    $dbUsername = "leilames_user";
//    $dbPassword = "6j1r51WfnT";
//    $dbName = "leilames_tennis";
//
//    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//
//    mysqli_set_charset($conn,"utf8");