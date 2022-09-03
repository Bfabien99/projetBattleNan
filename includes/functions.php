<?php
function connect($dbHost, $dbUsername, $dbPassword, $dbName)
{
    $db = new mysqli(
        $dbHost,
        $dbUsername,
        $dbPassword,
        $dbName
    );
    if ($db->connect_error) {
        die("Cannot connect to database: \n"
            . $db->connect_error . "\n"
            . $db->connect_error);
    }
    return $db;
}

function escapeString($string)
{
    global $db;
    $new_string = mysqli_real_escape_string($db, trim(mb_strtolower($string)));
    return $new_string;
}