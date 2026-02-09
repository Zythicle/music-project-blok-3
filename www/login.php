<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login_process.php" method="post">
        <div class="form-group">
            <label for="email_form">Email:</label>
            <input type="text" name="email_form" id="email_form">
        </div>
        <div class="form-group">
            <label for="password_form">Password:</label>
            <input type="text" name="password_form" id="password_form">
        </div>
        <button type="submit">Login</button>
        <p>Nog geen account? <a href="register.php">Registreer hier</a></p>
    </form>
</body>
</html>