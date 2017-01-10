<?php

define('DB_NAME', 'your_database');

define('DB_USERNAME', 'your_username');

define('DB_PASSWORD', 'your_password');


$db = new mysqli('localhost', DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($db->connect_error) {
    die('Connect Error (' . $db->connect_errno . ') '
        . $db->connect_error);
}


