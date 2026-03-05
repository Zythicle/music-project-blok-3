<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'navbar.php'; ?>

    <form action="login_process.php" method="post" class="login-form">
        <div class="form-group">
            <label for="email_form">E-mail:</label>
            <input type="email" name="email_form" id="email_form" required>
        </div>
        
        <div class="form-group">
            <label for="password_form">Wachtwoord:</label>
            <input type="password" name="password_form" id="password_form" required>
        </div>
        
         <div class="form-actions">
            <button type="submit" class="btn btn-primary">Inloggen</button>
            <p class="register-link">Nog geen account? <a href="register.php">Registreer hier</a></p>
        </div>
    </form>

<?php include 'footer.php'; ?>

</body>
</html>