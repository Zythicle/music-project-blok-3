<?php

session_start();


require 'database.php';

if (!isset($_GET['title']) || $_GET['title'] === '') {
    header('Location: index.php');
    exit;
}

$title = $_GET['title'];
$stmt = $conn->prepare("SELECT * FROM Figurine WHERE title = :title");
$stmt->execute(['title' => $title]);
$figurine = $stmt->fetch(PDO::FETCH_ASSOC);

if ($figurine === false) {
    header('Location: index.php');
    exit;
}

include 'navbar.php';

?>


<main>

<link rel="stylesheet" href="style.css">

<div class="Product">

<a href="index.php" class="btn btn-primary"><-- Terug naar de winkel</a>

<article class="product-card">
<div class="product-info">

<div class="MikuAfbeelding">
                    <img src="<?php echo htmlspecialchars($figurine['image']); ?>" alt="<?php echo htmlspecialchars($figurine['title']); ?>" width="200" height="200" />
                </div>

                  <h3><?php echo htmlspecialchars($figurine['title']); ?></h3>
                </div>
                <p><?php echo htmlspecialchars($figurine['character']) . ' - ' . htmlspecialchars($figurine['figure_type']) . ' - ' . htmlspecialchars($figurine['manufacturer']); ?></p>


            
        <button class="button button1">
                    <h2>BRAND NEW</h2>
                    <span>
                        <h1><?php echo number_format($figurine['price'], 2, ',', ''); ?></h1>
                    </span>
                </button>
</article>

</div>
 
</main>

<?php include 'footer.php'; ?>
