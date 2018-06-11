<?php

function getGenericsByType($lang_key, $type){
    include "dbc.inc.php";
    $generics = array();

    $sql = "SELECT * FROM generic_page_content WHERE type = '$type' AND language_key = $lang_key ORDER BY keyword";
    $r = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($r)){
        array_push($generics, $row);
    }

    return $generics;
}
