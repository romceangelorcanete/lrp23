<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "login_register_db";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Something went wrong;");
}
?>