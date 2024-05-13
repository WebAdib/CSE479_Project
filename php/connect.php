<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "contact_form_db";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong. Database is not connected;");
}
?>