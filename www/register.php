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

        <form action="register_process.php" method="post">

    <div class="form-group">

<label for="username_form">Username:</label>
<input type="text" name="username_form" id="username_form" required>

</div>

    <div class="form-group">

<label for="firstname_form">First Name:</label>
<input type="text" name="firstname_form" id="firstname_form" required>

</div>

<div class="form-group">

<label for="lastname_form">Last Name:</label>
<input type="text" name="lastname_form" id="lastname_form" required>

</div>

<div class="form-group">

    <label for="email_form">Email:</label>
    <input type="email" name="email_form" id="email_form" required>

</div>

<div class="form-group">

<label for="password_form">Password:</label>
<input type="password" name="password_form" id="password_form" required>

</div>

<div class="form-group">

<label for="phone_form">Phone:</label>
<input type="text" name="phone_form" id="phone_form" required>

</div>

<div class="form-group">
<select name="role_form" id="role_form" required>
<option value="">Select a role</option>
<option value="employee">Employee</option>
<option value="member">User</option>

</select>

</div>
<button type="submit">Maak gebruiker</button>

    </form>

<?php include 'footer.php'; ?>

</body>
</html>