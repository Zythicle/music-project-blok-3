<?php

session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require 'database.php';

if (isset($_GET['fuel_type']) && !empty($_GET['fuel_type'])) {
    $fuel_type = mysqli_real_escape_string($conn, $_GET['fuel_type']);
    $sql = "SELECT * FROM car WHERE fuel_type = '$fuel_type'";
} else {
    $sql = "SELECT * FROM car";
}

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM car WHERE brand LIKE '%$search%' OR model LIKE '%$search%'";
}

if (isset($_GET['sorteer']) && !empty($_GET['sorteer'])) {
    $sorteer = mysqli_real_escape_string($conn, $_GET['sorteer']);
    $sql = "SELECT * FROM car ORDER BY $sorteer";
} else{
    $sql = "SELECT * FROM car";
}

$result = mysqli_query($conn, $sql);
$car = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>



<!-- Main page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Home</title>
    <link rel="stylesheet" href="style.css">
</head>



<!-- Timer -->
<div id="page-timer" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #111;
    color: #fff;
    padding: 10px 14px;
    border-radius: 8px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    z-index: 9999;
">
    Tijd op pagina: 00:00:00
</div>

<script>
    let seconds = 0;
    const timerElement = document.getElementById("page-timer");

    function formatTime(sec) {
        const minutes = Math.floor(sec / 60);
        const remainingSeconds = sec % 60;
        return String(minutes).padStart(2, '0') + ":" + 
               String(remainingSeconds).padStart(2, '0');
    }

    setInterval(() => {
        seconds++;
        timerElement.textContent = "Tijd op pagina: " + formatTime(seconds);
    }, 1000);

</script>



<!-- Navbar -->
<body>
<?php include 'navbar.php'; ?>



<!-- Main content -->
<main>
   
</section>

    <div class="search-section">
        <div class="filter-container">
            <!-- Fuel Type Filter -->
            <div class="filter-group">
            <strong>Filter op brandstof:</strong>
            <a href="index.php">All</a> |
            <a href="?fuel_type=Diesel">Diesel</a> |
            <a href="?fuel_type=Electric">Electric</a> |
            <a href="?fuel_type=Petrol">Petrol</a> |
            <a href="?fuel_type=Hybrid">Hybrid</a>
        </div>
</div>
        <div class="filter-container">
            <!-- Fuel Type Filter -->
            <strong>Filter op Prijs per dag:</strong>
            <a href="?sorteer=price_per_day ASC">Laagste prijs</a> |
            <a href="?sorteer=price_per_day DESC">Hoogste prijs</a>
        </div>
</section>
        <form method="GET" class="search-form">
            <div class="search-input-group">
                <input type="text" name="search" placeholder="🔍 Zoek op merk, model..." class="search-input" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="search-btn">Zoeken</button>
            </div>
        </form>
    </div>



    <!-- CAR LIST -->
    <div class="car-list">
            <?php 
                foreach ($car as $c): ?>
                    <div class="car-item">
                        <div class="car-image">
                            <img 
                                src="<?php echo htmlspecialchars($c['image']); ?>" 
                                alt="<?php echo htmlspecialchars($c['brand'] . ' ' . $c['model']); ?>" 
                                width="200"
                            >
                        </div>

                        <div class="car-content">
                            <h3><?php echo htmlspecialchars($c['brand'] . ' ' . $c['model']); ?></h3>
                            <div class="car-specs">
                                <div class="spec-item">
                                    <span class="spec-label">Status</span>
                                    <span class="spec-value"><?php echo htmlspecialchars($c['status']); ?></span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Seats</span>
                                    <span class="spec-value"><?php echo htmlspecialchars($c['seats']); ?></span>
                                </div>
                            </div>
                            <div class="car-price">
                                <span class="price-tag">€<?php echo htmlspecialchars($c['price_per_day']); ?></span>
                                <span class="price-period">per dag</span>
                            </div>
                            <a href="car_detail.php?car_id=<?php echo htmlspecialchars($c['id']); ?>">Huur deze auto</a>
                        </div>
                    </div>
                <?php endforeach;
            ?>
    </div>
</main>



<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
