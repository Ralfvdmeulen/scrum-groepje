<?php include_once '../config/database.php';?>
<?php

// conectie naar de database
function db_connect()
{
    $mysqli = $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    return $mysqli;
}

// conectie maken en query sturen
function db_getData($query)
{
    $mysqli = db_connect();
    $result = $mysqli ->query($query);
    $mysqli->close();
    return $result;
}
