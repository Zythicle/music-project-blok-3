<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}


if ($_SESSION['role'] == 'user') {
    header("Location: dashboard_user.php");
    exit;
}


if ($_SESSION['role'] != 'admin') {
    echo "You are not allowed to view this page, please login as Admin. ";
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
    
 <h1>Dashboard</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Welkom <?php echo htmlspecialchars($_SESSION['firstname'], ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <a href="beheer_users.php" class="btn btn-primary">Beheer users</a>
            </div>
            <div class="col-6">
                <a href="beheer_items.php" class="btn btn-primary">Beheer items</a>
            </div>
        </div>
    </div>
</main>

</body>
<?php include 'footer.php'; ?>
</html>