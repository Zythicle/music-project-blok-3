<?php

session_start();

require 'database.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management - Car Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'navbar.php'; ?>

<div class="users-container">
    <div class="users-header">
        <h1>User Management</h1>
        <p>Total Users: <strong><?php echo htmlspecialchars(count($users)); ?></strong></p>
    </div>

    <div class="users-content">
        <div class="table-wrapper">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr class="user-row">
                                <td class="username-cell">
                                    <strong><?php echo htmlspecialchars($user['username']); ?></strong>
                                </td>
                                <td><?php echo htmlspecialchars($user['firstname']); ?></td>
                                <td><?php echo htmlspecialchars($user['lastname']); ?></td>
                                <td class="email-cell">
                                    <a href="mailto:<?php echo htmlspecialchars($user['email']); ?>">
                                        <?php echo htmlspecialchars($user['email']); ?>
                                    </a>
                                </td>
                                <td>
                                    <span class="role-badge <?php echo htmlspecialchars($user['role']); ?>">
                                        <?php echo htmlspecialchars($user['role']); ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- terug naar index -->
<div class="back-link">
    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
</div>

<?php include 'footer.php'; ?>

</body>
</html>