
<?php

require 'database.php';

$id = $_GET['car_id'];
$sql = "SELECT * FROM car WHERE id = $id";
$result = mysqli_query($conn, $sql);
$car = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($car['brand'] . ' ' . $car['model']); ?> - Car Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'navbar.php'; ?>

<div class="car-detail-container">
    <div class="car-detail-header">
        <h1><?php echo ($car['brand'] . ' ' . $car['model']); ?></h1>
        <p class="car-year"><?php echo ($car['year']); ?></p>
    </div>

    <div class="car-detail-content">
        <div class="car-detail-image">
            <img src="<?php echo ($car['image']); ?>" alt="<?php echo ($car['brand'] . ' ' . $car['model']); ?>">
        </div>

        <div class="car-detail-info">
            <div class="info-section">
                <h2>Vehicle Details</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <span class="label">Brand:</span>
                        <span class="value"><?php echo ($car['brand']); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Model:</span>
                        <span class="value"><?php echo ($car['model']); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Status:</span>
                        <span class="value status-badge <?php echo (strtolower($car['status']) == 'available' ? 'available' : 'unavailable'); ?>">
                            <?php echo ($car['status']); ?>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="label">Seats:</span>
                        <span class="value"><?php echo ($car['seats']); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Fuel:</span>
                        <span class="value"><?php echo ($car['fuel_type']); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Transmission:</span>
                        <span class="value"><?php echo ($car['transmission']); ?></span>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h2>Pricing & Availability</h2>
                <div class="pricing-info">
                    <div class="price-item">
                        <span class="label">Daily Rate:</span>
                        <span class="price">$<?php echo ($car['price_per_day']); ?></span>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <?php if(strtolower($car['status']) == 'available'): ?>
                    <a href="rentals.php?car_id=<?php echo ($car['id']); ?>" class="btn btn-primary">Book Now</a>
                <?php else: ?>
                    <button class="btn btn-disabled" disabled>Not Available</button>
                <?php endif; ?>
                <a href="index.php" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>