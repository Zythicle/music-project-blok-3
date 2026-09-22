<?php

include 'navbar.php';
require 'database.php';

$stmt = $conn->prepare("SELECT * FROM Figurines");
$stmt->execute();
$figurines = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

    <link rel="stylesheet" href="style.css">

<!-- make the figurines appear on the screen -->
 <main>
  <?php include 'sidebar.php'; ?>

 <div class="Product">
        <?php foreach ($figurines as $figurine): ?>
                <div class="MikuAfbeelding">
                    <img src="<?php echo htmlspecialchars($figurine['image'] ?? 'default-image.jpg', ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($figurine['title'] ?? 'Product afbeelding', ENT_QUOTES, 'UTF-8'); ?>" width="200" height="200" />
                </div>

                <div class="product-info">
                  <h3><?php echo htmlspecialchars($figurine['title'] ?? 'Onbekend product', ENT_QUOTES, 'UTF-8'); ?></h3>
                </div>


              <a href="product_details.php?title=<?php echo htmlspecialchars($figurine['title'] ?? ''); ?>" class="btn btn-primary">Bekijk details</a>
            <?php endforeach; ?>
    </div>

</main>

<?php include 'footer.php'; ?>

