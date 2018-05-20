<?php

function getEvents($lang_key) {
    include "dbc.inc.php";
    $sql = "SELECT * FROM generic_page_content WHERE language_key = $lang_key AND type = 'event' AND show_in_slide = 1";
    $result = mysqli_query($conn, $sql);

    $events = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($events, $row);
    }

    return $events;
}

function getNews($lang_key) {
    include "dbc.inc.php";
    $sql = "SELECT * FROM generic_page_content WHERE language_key = $lang_key AND type = 'news' AND show_in_slide = 1";
    $result = mysqli_query($conn, $sql);

    $events = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($events, $row);
    }

    return $events;
}

function getTournaments($lang_key) {
    include "dbc.inc.php";
    $sql = "SELECT * FROM generic_page_content WHERE language_key = $lang_key AND type = 'tournament' AND show_in_slide = 1";
    $result = mysqli_query($conn, $sql);

    $events = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($events, $row);
    }

    return $events;
}

function getActivities($lang_key) {
    include "dbc.inc.php";
    $sql = "SELECT * FROM generic_page_content WHERE language_key = $lang_key AND type = 'activity' AND show_in_slide = 1";
    $result = mysqli_query($conn, $sql);

    $events = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($events, $row);
    }

    return $events;
}