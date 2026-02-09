<?php
$host = "mariadb";
$user = "root";
$password = "password";
$database = "car rental";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>