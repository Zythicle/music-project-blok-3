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

<main class="admin-page">
    <section class="admin-panel">
        <h1>Beheer Figurines</h1>
        <p>Kies een actie om de figurines in de database te beheren.</p>

        <div class="admin-actions">
            <a href="beheer_figurine.php" class="admin-action">Beheer figurines</a>
            <a href="add_figurine.php" class="admin-action">Figurine toevoegen</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

</body>
</html>