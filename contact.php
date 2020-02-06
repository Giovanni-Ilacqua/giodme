<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giodme Personal Website | Contact</title>
    <?php include 'include/html-links.inc'; ?>
</head>

<body>



    <?php include 'include/top-bar.inc'; ?>

    <main class="container white-background margin-top">

        <h2>CONTACT ME</h2>

        <p class="mal-align">
            For any inquiries on the workout programs, or if you are interested in hiring me for additional personal training services, 
            you can email me directly at <a class="link" href ="mailto:ilacqua.giovanni@gmail.com">ilacqua.giovanni@gmail.com</a>
            or message me on Instagram at <a class="link" target="_blank" href="https://www.instagram.com/giodme/">@giodme</a>.
        </p>
        <p class="mal-align">
            If you prefer, you can use the following online form:
        </p>

        <div class="form-wrapper">
            <form method="POST" action="thank-you.php" class="form-grid">

                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required placeholder="John">

                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required placeholder="Doe">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="email@example.com">

                <label for="message">Message:</label>
                <textarea name="message" id="message" required placeholder="Enter text here..."></textarea>

                <input type="submit" value="Submit" class="submit-button">

            </form>

        </div>

    </main>

    <?php include 'include/scripts.inc'; ?>
</body>

</html>