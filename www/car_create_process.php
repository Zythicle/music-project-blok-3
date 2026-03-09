<?php

if(empty($_POST['brand'])){
    echo htmlspecialchars("Naam mag niet leeg zijn");
    exit;
}   

$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$license_plate = $_POST['license_plate'];
$fuel_type = $_POST['fuel_type'];
$seats = (int) ($_POST['seats']);
$transmission = $_POST['transmission'];
$price_per_day = (int) ($_POST['price_per_day']);
$status = $_POST['status'];
$image = $_POST['image'];

require 'database.php';


$sql = "INSERT INTO car (brand, model, year, license_plate, fuel_type, seats, transmission, price_per_day, status, image, added_at) VALUES ('$brand', '$model', '$year', '$license_plate', '$fuel_type', '$seats', '$transmission', '$price_per_day', '$status', '$image', NOW())";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
}
