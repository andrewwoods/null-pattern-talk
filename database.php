<?php



$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($db->connect_error) {
    die('Connect Error (' . $db->connect_errno . ') '
        . $db->connect_error);
}


