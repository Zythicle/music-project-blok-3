<?php
require 'database.php';

if (isset($_GET['fuel_type']) && !empty($_GET['fuel_type'])) {
    $fuel_type = mysqli_real_escape_string($conn, $_GET['fuel_type']);
    $sql = "SELECT * FROM car WHERE fuel_type = '$fuel_type'";
} else {
    $sql = "SELECT * FROM car";
}

$result = mysqli_query($conn, $sql);
$car = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>

    <!-- FILTER -->
    <section>
        <div style="background: white; padding: 1rem; margin-bottom: 1rem; border-radius: 10px;">
            <strong>Filter op brandstof:</strong>
            <a href="index.php">All</a> |
            <a href="?fuel_type=Diesel">Diesel</a> |
            <a href="?fuel_type=Electric">Electric</a> |
            <a href="?fuel_type=Petrol">Petrol</a> |
            <a href="?fuel_type=Hybrid">Hybrid</a>
        </div>

    </section>

    <!-- CAR LIST -->
    <div class="car-list">
            <?php foreach ($car as $c): ?>
                <div class="car-item">
                    <div class="car-image">
                        <img 
                            src="<?php echo ($c['image']); ?>" 
                            alt="<?php echo ($c['brand'] . ' ' . $c['model']); ?>" 
                            width="200"
                        >
                    </div>

                    <h3><?php echo ($c['brand'] . ' ' . $c['model']); ?></h3>
                    <p>Status: <?php echo ($c['status']); ?></p>
                    <p>Seats: <?php echo ($c['seats']); ?></p>
                    <a href="car_detail.php?car_id=<?php echo $c['id']; ?>">Rent this car</a>
                </div>
            <?php endforeach; ?>
    </div>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
