<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'navbar.php'; ?>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard-container" style="margin-bottom: 20px;">
    <div class="dashboard-header">
        <h2>Welkom terug, <strong><?php echo $_SESSION['username']; ?></strong>!</h2>
    </div>
</div>

<!-- button to go to users.php -->
<div class="dashboard-actions" style="margin-top: 20px;">
    <a href="users.php" class="btn btn-secondary">Beheer Gebruikers</a>
</div>

<div class="dashboard-actions" style="margin-top: 20px;">
 <a href="car_create.php" class="btn btn-secondary">Beheer Auto's</a>
</div>
<?php include 'footer.php'; ?>

</body>

</html>