<?php

//schrijf validatie met empty() voor alle velden

//check of voornaam en achternaam minstens 3 karakters hebben.

//Check of rol overeenkomst met de enum waardes uit de database.

if( empty($_POST['email_form']) ||
    empty($_POST['password_form']) ||
    empty($_POST['firstname_form']) ||
    empty($_POST['lastname_form']) ||
    empty($_POST['username_form']) ||
    empty($_POST['role_form'])
    empty($_POST['address_form']) ||
    empty($_POST['house_number_form']) ||
    empty($_POST['zip_code_form']) ||
    empty($_POST['city_form']) ||
    empty($_POST['country_form']) ||
    empty($_POST['phone_form']) ||
    empty($_POST['mobile_form'])
    ){
        echo "Een van de velden is leeg";
    exit;
}

if( strlen($_POST['email_form']) < 3 ||
    strlen($_POST['firstname_form']) < 3 ||
    strlen($_POST['lastname_form']) < 3 ||
    strlen($_POST['username_form']) < 3
    strlen($_POST['address_form']) < 3 ||
    strlen($_POST['city_form']) < 3 ||
    strlen($_POST['country_form']) < 3
    strlen($_POST['phone_form']) < 3 ||
    strlen($_POST['mobile_form']) < 3

){
    echo "Voor elk veld moet er minstens drie karakters opgegeven worden";
    exit;
}

if( strlen($_POST['password_form']) < 8 ){
    echo "wachtwoord moet minstens 8 karakters hebben";
    exit;
}

if (!filter_var($_POST['email_form'], FILTER_VALIDATE_EMAIL)) {
    echo "Vul een geldig emailadres in";
    exit;
}

require 'database.php';

$email = mysqli_real_escape_string($conn, $_POST['email_form']);
$password = mysqli_real_escape_string($conn, $_POST['password_form']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname_form']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname_form']);
$username = mysqli_real_escape_string($conn, $_POST['username_form']);
$role = mysqli_real_escape_string($conn, $_POST['role_form']);
$street = mysqli_real_escape_string($conn, $_POST['address_form']);
$housenumber = mysqli_real_escape_string($conn, $_POST['house_number_form']);
$zipcode = mysqli_real_escape_string($conn, $_POST['zip_code_form']);
$city = mysqli_real_escape_string($conn, $_POST['city_form']);
$country = mysqli_real_escape_string($conn, $_POST['country_form']);
$phone = mysqli_real_escape_string($conn, $_POST['phone_form']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile_form']);

$sql = "INSERT INTO users (username, firstname, lastname, email, password, role, street, housenumber, zipcode, city, country, phone, mobile)
        VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$role', '$street', '$housenumber', '$zipcode', '$city', '$country', '$phone', '$mobile')";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location: login.php");
    exit;
}
else{
    echo 'er is iets fout gegaan: ' . mysqli_error($conn);
}






