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

function del_User($id) {
    $mysqli = db_connect();
    $sql = "DELETE FROM `klant` WHERE `ID` = $id";
    $result = $mysqli->query($sql);
    $mysqli->close();
    return $result;
}
