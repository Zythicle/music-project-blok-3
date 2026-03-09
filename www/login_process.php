<?php


require 'database.php';


$email = $_POST['email_form'];
$password = $_POST['password_form'];

if(empty($email)){
    echo htmlspecialchars("Email mag niet leeg zijn");
    exit;
}

if(empty($password)){
    echo htmlspecialchars("Wachtwoord mag niet leeg zijn");
    exit;
}

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result); // 1 gebruiker halen wij op uit db.


if(is_array($user)){
    if($password == $user['password']){

        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        

        if($user['role'] == 'member'){
            header("Location: dashboard_user.php");
            exit;
            
        } else if($user['role'] == 'employee'){
            header("Location: dashboard.php");
            exit;
        }
    }
} else {
    echo htmlspecialchars("Ongeldige inloggegevens");
    exit;
}   