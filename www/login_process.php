<?php

if (isset($_GET['submit'])) {
    if (isset($_GET['email']) && isset($_GET['password'])) {
        if (!empty($_GET['email']) && !empty($_GET['password'])) {
            $emailForm = $_GET['email'];
            $passwordForm = $_GET['password'];

            require 'database.php';

            $sql = "SELECT * FROM Users WHERE email = :email LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['email' => $emailForm]);
            $dbuser = $stmt->fetch(PDO::FETCH_ASSOC);

            // check if the email exists
            if ($dbuser !== false) {
                // verify the password using PHP's built-in function
                if (password_verify($passwordForm, $dbuser['password'])) {
                    session_start();
                    $_SESSION['user_id']    = $dbuser['user_id'];
                    $_SESSION['email']      = $dbuser['email'];
                    $_SESSION['username']   = $dbuser['username'];
                    $_SESSION['firstname']  = $dbuser['firstname'];
                    $_SESSION['lastname']   = $dbuser['lastname'];
                    $_SESSION['role']       = $dbuser['role'];

                    header("Location: dashboard.php");
                    exit;
                } else {
                    $_GET['message'] = 'wrongpassword';
                    include 'login-message.php';
                    exit;
                }
            } else {
                $_GET['message'] = 'usernotfound';
                include 'login-message.php';
                exit;
            }
        }
    }
}
