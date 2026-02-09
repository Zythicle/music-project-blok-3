<?php

if(empty($_POST['brand'])){
    echo "Naam mag niet leeg zijn";
    exit;
}   

$id = $_POST['id'] ?? '';
$brand = $_POST['brand'] ?? '';
$model = $_POST['model'] ?? '';
$year = $_POST['year'] ?? '';
$license_plate = $_POST['license_plate'] ?? '';
$fuel_type = $_POST['fuel_type'] ?? '';
$seats = (int) ($_POST['seats'] ?? 0);
$transmission = $_POST['transmission'] ?? '';
$price_per_day = (int) ($_POST['price_per_day'] ?? 0);
$status = $_POST['status'] ?? '';
$image = $_POST['image'] ?? '';

require 'database.php';


$sql = "INSERT INTO car (id, brand, model, year, license_plate, fuel_type, seats, transmission, price_per_day, status, image, added_at) VALUES ('$id', '$brand', '$model', '$year', '$license_plate', '$fuel_type', '$seats', '$transmission', '$price_per_day', '$status', '$image', NOW())";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
}
