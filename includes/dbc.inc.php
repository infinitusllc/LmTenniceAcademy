<?php
    $dbServername = "91.212.213.16";
    $dbUsername = "leilames";
    $dbPassword = "6j1r51WfnT";
    $dbName = "leilames_data";

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