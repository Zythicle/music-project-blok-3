<?php

require 'database.php';

if (!isset($_GET['title']) || $_GET['title'] === '') {
    header('Location: index.php');
    exit;
}

$title = $_GET['title'];
$stmt = $conn->prepare("SELECT * FROM Figurines WHERE title = :title");
$stmt->execute(['title' => $title]);
$figurine = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$figurine) {
    header('Location: index.php');
    exit;
}

?>


<main>

<div class>

<h3><?php echo htmlspecialchars($figurine['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
<p><?php echo htmlspecialchars($figurine['character'], ENT_QUOTES, 'UTF-8'); ?> , <?php echo htmlspecialchars($figurine['figure_type'], ENT_QUOTES, 'UTF-8'); ?></p>

<button class="button button1">
                    <h2>BRAND NEW</h2>
                    <span>
                        <h1><?php echo number_format((float) $figurine['price'], 2, ',', ''); ?></h1>
                    </span>
                </button>

</div>
 
</main>