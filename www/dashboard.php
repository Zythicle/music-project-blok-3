<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}


if ($_SESSION['role'] == 'user') {
    header("Location: dashboard_user.php");
    exit;
}


if ($_SESSION['role'] != 'admin') {
    echo "You are not allowed to view this page, please login as Admin. ";
    exit;
}

require 'database.php';


$sql = [];
$query = "SELECT COUNT(*) AS total FROM Users";
$users = $conn->query($query)->fetch(PDO::FETCH_ASSOC);
array_push($sql, $query);


$query = "SELECT COUNT(*) AS total FROM Figurine";
$figurines = $conn->query($query)->fetch(PDO::FETCH_ASSOC);
array_push($sql, $query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLARIS JAPAN - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php include 'navbar.php'; ?>
<body>
    
 <h1>Dashboard</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Welkom <?php echo htmlspecialchars($_SESSION['firstname'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p>Je bent ingelogd als <?php echo htmlspecialchars($_SESSION['role'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-group">
                <h2 for="">Totaal aantal gebruikers</h2>
                <p><?php echo htmlspecialchars($users['total'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
           
            <div class="card-group">
                <h2 for="">Totaal aantal soorten figurines</h2>
                <p><?php echo htmlspecialchars($figurines['total'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        </div>
    </div>
</main>

</body>
<?php include 'footer.php'; ?>
</html>