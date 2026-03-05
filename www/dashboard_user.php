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

<!-- your user information -->
<div class="dashboard-content" style="margin-bottom: 20px;">
    <h3>Jouw Informatie</h3>
    <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
    <p><strong>Role:</strong> <?php echo $_SESSION['role']; ?></p>
</div>

<!-- Past transactions -->
<div class="dashboard-content" style="margin-bottom: 20px;">
    <h3>Vorige Transacties</h3>
    <!-- Content for past transactions -->
    <p>Hier komen je vorige transacties te staan.</p>
</div>


<!-- Past reservations -->
<div class="dashboard-content" style="margin-bottom: 116px;">
    <h3>Reserveringen</h3>
    <!-- Content for past reservations -->
    <p>Hier komen je reserveringen te staan.</p>
</div>

</html>
<?php include 'footer.php'; ?>
