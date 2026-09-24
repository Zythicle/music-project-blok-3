<?php

session_start();


if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}

if ($_SESSION['role'] != 'admin') {
    echo "You are not allowed to view this page, please login as admin";
    exit;
}

//check method
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "You are not allowed to view this page";
    exit;
}
require 'database.php';

//.

if(empty($_POST['title'])){
    echo "Please fill in the title field.";
    exit;
}

if(empty($_POST['character'])){
    echo "Please fill in the character field.";
    exit;
}

if(empty($_POST['figure_type'])){
    echo "Please fill in the figure type field.";
    exit;
}

if(empty($_POST['manufacturer'])){
    echo "Please fill in the manufacturer field.";
    exit;
}

if(empty($_POST['price'])){
    echo "Please fill in the price field.";
    exit;
}

if(empty($_POST['image'])){
    echo "Please fill in the image field.";
    exit;
}

//.

if(strlen($_POST['title']) > 100){
    echo "The title field must be less than 100 characters.";
    exit;
}

if(strlen($_POST['character']) > 50){
    echo "The character field must be less than 50 characters.";
    exit;
}

if(strlen($_POST['figure_type']) > 50){
    echo "The figure type field must be less than 50 characters.";
    exit;
}

if(strlen($_POST['manufacturer']) > 50){
    echo "The manufacturer field must be less than 50 characters.";
    exit;
}

if(!is_numeric($_POST['price'])){
    echo "The price field must be a number.";
    exit;
}

if(strlen($_POST['image']) > 255){
    echo "The image field must be less than 255 characters.";
    exit;
}

//.

if(!isset($_POST['title']) ||
!isset($_POST['character']) ||
!isset($_POST['figure_type']) ||
!isset($_POST['manufacturer']) ||
!isset($_POST['price']) ||
!isset($_POST['image'])
){
    echo "Please fill in all fields.";
    exit;
}

$title = $_POST['title'];
$character = $_POST['character'];
$figure_type = $_POST['figure_type'];
$manufacturer = $_POST['manufacturer'];
$price = $_POST['price'];
$image = $_POST['image'];
$added_at = date('Y-m-d H:i:s.u');

$sql = "INSERT INTO Figurine (title, `character`, figure_type, manufacturer, price, image, added_at) VALUES (:title, :character, :figure_type, :manufacturer, :price, :image, :added_at)";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([
    'title' => $title,
    'character' => $character,
    'figure_type' => $figure_type,
    'manufacturer' => $manufacturer,
    'price' => $price,
    'image' => $image,
    'added_at' => $added_at
]);

if ($result) {
    header("Location: index.php");
    exit;
}

echo "Something went wrong";
