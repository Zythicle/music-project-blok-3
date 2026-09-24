<?php

include 'navbar.php';
require 'database.php';

$stmt = $conn->prepare("SELECT * FROM Figurine");
$stmt->execute();
$figurines = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

    <link rel="stylesheet" href="style.css">

<!-- make the figurines appear on the screen -->
 <main>
   <?php include 'sidebar.php'; ?>

 <div class="Product">
          
 <?php foreach ($figurines as $figurine): ?>
        <article class="product-card">
                <div class="MikuAfbeelding">
                    <img src="<?php echo htmlspecialchars($figurine['image']); ?>" alt="<?php echo htmlspecialchars($figurine['title']); ?>" width="200" height="200" />
                </div>

                <div class="product-info">
                  <h3><?php echo htmlspecialchars($figurine['title']); ?></h3>
                </div>


              <a href="product_details.php?title=<?php echo htmlspecialchars($figurine['title']); ?>" class="btn btn-primary">Bekijk details</a>
                </article>
            <?php endforeach; ?>
    </div>

</main>

<?php include 'footer.php'; ?>

