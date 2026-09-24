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

<body>
<?php include 'navbar.php'; ?>

<main class="dashboard-page">
    <section class="dashboard-panel">
        <p class="dashboard-label">ADMIN DASHBOARD</p>
        <h1>Welkom, <?php echo htmlspecialchars($_SESSION['firstname']); ?> <?php echo htmlspecialchars($_SESSION['lastname']); ?></h1>
        <p class="dashboard-intro">Beheer gebruikers en figurines vanuit dit overzicht.</p>

        <div class="dashboard-actions">
            <a href="beheer_users.php" class="dashboard-action">
                <strong>Beheer users</strong>
                <span>Bekijk en beheer gebruikersaccounts</span>
            </a>
            <a href="beheer_items.php" class="dashboard-action">
                <strong>Beheer items</strong>
                <span>Voeg figurines toe of pas ze aan</span>
            </a>
        </div>
    </section>
</main>

</body>
<?php include 'footer.php'; ?>
</html>