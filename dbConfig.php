<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'id17465659_rot';
$dbPassword = 'Al%|{]Ta@fB__9=V';
$dbName = 'id17465659_programacionneta';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}