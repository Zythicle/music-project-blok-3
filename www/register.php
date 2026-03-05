
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer jezelf hier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'navbar.php'; ?>

<div class="form-container">

    <form action="register_process.php" method="post" class="register-form">
        <div class="form-row">
            <div class="form-group">
                <label for="username_form">Gebruikersnaam:</label>
                <input type="text" name="username_form" id="username_form" required>
            </div>

            <div class="form-group">
                <label for="firstname_form">Voornaam:</label>
                <input type="text" name="firstname_form" id="firstname_form" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="lastname_form">Achternaam:</label>
                <input type="text" name="lastname_form" id="lastname_form" required>
            </div>

            <div class="form-group">
                <label for="email_form">E-mail:</label>
                <input type="email" name="email_form" id="email_form" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="password_form">Wachtwoord:</label>
                <input type="password" name="password_form" id="password_form" required>
            </div>

                    <div class="form-group">
                <label for="address_form">Street:</label>
                <input type="text" name="address_form" id="address_form" required>
            </div>

            <div class="form-group">
                <label for="house_number_form">House number:</label>
                <input type="text" name="house_number_form" id="house_number_form" required>
            </div>

            <div class="form-group">
                <label for="zip_code_form">Zipcode:</label>
                <input type="text" name="zip_code_form" id="zip_code_form" required>
            </div>

                        <div class="form-group">
                <label for="city_form">City:</label>
                <input type="text" name="city_form" id="city_form" required>
            </div>

            <div class="form-group">
                <label for="country_form">Country:</label>
                <input type="text" name="country_form" id="country_form" required>
            </div>

                      <div class="form-group">
                <label for="phone_form">Telefoon:</label>
                <input type="text" name="phone_form" id="phone_form" required>
            </div>
        </div>

                        <div class="form-group">
                <label for="mobile_form">Mobile:</label>
                <input type="text" name="mobile_form" id="mobile_form" required>
            </div>

        <div class="form-row">
            <div class="form-group full-width">
                <label for="role_form">Rol:</label>
                <select name="role_form" id="role_form" required>
                    <option value="">Selecteer een rol</option>
                    <option value="employee">Medewerker</option>
                    <option value="member">Gebruiker</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Account aanmaken</button>
            <p class="login-link">Al een account? <a href="login.php">Log hier in</a></p>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>

</body>
</html>