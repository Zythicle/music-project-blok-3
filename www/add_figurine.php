<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe figurine - SOLARIS JAPAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main class="add-figurine-page">
    <form action="add_figurine_process.php" method="post" enctype="multipart/form-data" class="figurine-form">
        <p class="dashboard-label">FIGURINE BEHEER</p>
        <h1>Nieuwe figurine</h1>

        <div class="figurine-form-group">
            <label for="title">Titel</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="figurine-form-group">
            <label for="character">Character</label>
            <input type="text" id="character" name="character" required>
        </div>

        <div class="figurine-form-group">
            <label for="figure_type">Figure type</label>
            <input type="text" id="figure_type" name="figure_type" required>
        </div>

        <div class="figurine-form-group">
            <label for="manufacturer">Manufacturer</label>
            <input type="text" id="manufacturer" name="manufacturer" required>
        </div>

        <div class="figurine-form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" step="0.01" min="0" required>
        </div>

        <div class="figurine-form-group">
            <label for="image">Image</label>
            <input type="text" id="image" name="image" required>
        </div>

        <button type="submit" class="dashboard-primary-action">Figurine toevoegen</button>
    </form>
</main>

<?php include 'footer.php'; ?>

</body>
</html>