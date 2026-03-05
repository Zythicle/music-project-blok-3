<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Car Rental</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'navbar.php'; ?>

<div class="contact-container">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>Get in touch with our team. We're here to help!</p>
    </div>

    <div class="contact-content">
        <div class="contact-form-section">
            <h2>Stuur ons een bericht</h2>
            <form action="contact_process.php" method="POST" class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Volledige naam *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail adres *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Telefoonnummer</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Onderwerp *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecteer een onderwerp</option>
                            <option value="rental_inquiry">Huur aanvraag</option>
                            <option value="booking_issue">Boekingsprobleem</option>
                            <option value="complaint">Klacht</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Anders</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label for="message">Bericht *</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Bericht versturen</button>
                </div>
            </form>
        </div>

        <div class="contact-info-section">
            <h2 style="text-align: center;">Contact Information</h2>
            
            <div class="contact-info-card">
                <h3>📍 Address</h3>
                <p>123 Main Street<br>
                City, State 12345<br>
                Country</p>
            </div>

            <div class="contact-info-card">
                <h3>📞 Phone</h3>
                <p><a href="tel:+1234567890">+1 (234) 567-8900</a></p>
            </div>

            <div class="contact-info-card">
                <h3>✉️ Email</h3>
                <p><a href="mailto:info@carrental.com">info@carrental.com</a></p>
            </div>

            <div class="contact-info-card">
                <h3>⏰ Business Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                Saturday: 10:00 AM - 4:00 PM<br>
                Sunday: Closed</p>
            </div>

            <div class="contact-info-card">
                <h3>🚗 Emergency Support</h3>
                <p><a href="tel:+1234567899">+1 (234) 567-8899</a><br>
                Available 24/7</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
