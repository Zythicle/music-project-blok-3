<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'navbar.php'; ?>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Dashboard</h1>

<a href="users.php">Alle users in the database</a>

<h3>Voeg een auto toe!</h3>

    <form action="car_create_process.php" method="post">
        <div class="form-group">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control">
        </div>

        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" class="form-control">
        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" id="year" class="form-control">
        </div>

        <div class="form-group">
            <label for="license_plate">License Plate</label>
            <input type="text" name="license_plate" id="license_plate" class="form-control">
        </div>

        <div class="form-group">
            <label for="fuel_type">Fuel Type</label>
            <input type="text" name="fuel_type" id="fuel_type" class="form-control">
        </div>

        <div class="form-group">
            <label for="seats">Seats</label>
            <input type="text" name="seats" id="seats" class="form-control">
        </div>

        <div class="form-group">
            <label for="transmission">Transmission</label>
            <input type="text" name="transmission" id="transmission" class="form-control">
        </div>

        <div class="form-group">
            <label for="price_per_day">Price per day</label>
            <input type="text" name="price_per_day" id="price_per_day" class="form-control">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control">
        </div>

        <button type="submit">Create</button>
    </form>
</body>

</html>

<?php include 'footer.php'; ?>