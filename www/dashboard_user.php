<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}

if ($_SESSION['role'] != 'user') {
    echo "You are not allowed to view this page, please login as User. ";
    exit;
}

require 'database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLARIS JAPAN - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php include 'navbar.php'; ?>
<body>
    
<h1>Welcome to the Dashboard</h1>



</body>
<?php include 'footer.php'; ?>
</html>