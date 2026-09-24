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
<main class="dashboard-page">
    <section class="dashboard-panel user-dashboard-panel">
        <p class="dashboard-label">MY DASHBOARD</p>
        <h1>Welkom, <?php echo htmlspecialchars($_SESSION['firstname'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p class="dashboard-intro">Bekijk onze collectie figurines en ontdek je volgende favoriet.</p>
        <a href="index.php" class="dashboard-primary-action">Bekijk figurines</a>
    </section>
</main>

</body>
<?php include 'footer.php'; ?>
</html>