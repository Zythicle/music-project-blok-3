<?php 

include 'navbar.php';

?>

<link rel="stylesheet" href="style.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SOLARIS JAPAN</title>
</head>
<body>
    <main class="login-page">
        <form action="login_process.php" method="post" class="login-form">
            <p class="dashboard-label">SOLARIS JAPAN</p>
            <h1>Inloggen</h1>
            <div class="form-group">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" placeholder="password" required>
            </div>
            <button type="submit" name="submit" class="dashboard-primary-action">Inloggen</button>
        </form>
    </main>

</body>

</html>