<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

    <div class="form-container">
        <div class="form-header">
            <h2>Voeg een auto toe</h2>
        </div>

        <form action="car_create_process.php" method="post" class="car-form">
            <div class="form-row">

                <div class="form-group">
                    <label for="brand">Merk:</label>
                    <input type="text" name="brand" id="brand" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="model">Model:</label>
                    <input type="text" name="model" id="model" required>
                </div>

                <div class="form-group">
                    <label for="year">Bouwjaar:</label>
                    <input type="number" name="year" id="year" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="license_plate">Kenteken:</label>
                    <input type="text" name="license_plate" id="license_plate" required>
                </div>

                <div class="form-group">
                    <label for="fuel_type">Brandstoftype:</label>
                    <select name="fuel_type" id="fuel_type" required>
                        <option value="">Selecteer type</option>
                        <option value="Benzine">Benzine</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Elektrisch">Elektrisch</option>
                        <option value="Hybride">Hybride</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="seats">Aantal zitplaatsen:</label>
                    <input type="number" name="seats" id="seats" required>
                </div>

                <div class="form-group">
                    <label for="transmission">Transmissie:</label>
                    <select name="transmission" id="transmission" required>
                        <option value="">Selecteer transmissie</option>
                        <option value="Handmatig">Handmatig</option>
                        <option value="Automatisch">Automatisch</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="price_per_day">Prijs per dag (€):</label>
                    <input type="number" name="price_per_day" id="price_per_day" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" required>
                        <option value="">Selecteer status</option>
                        <option value="Beschikbaar">Beschikbaar</option>
                        <option value="Verhuurd">Verhuurd</option>
                        <option value="Onderhoud">Onderhoud</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label for="image">Afbeelding URL:</label>
                    <input type="url" name="image" id="image" placeholder="https://example.com/car-image.jpg" required>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Auto toevoegen</button>
            </div>
        </form>
    </div>
</div>

</body>

<?php include 'footer.php'; ?>
</html>