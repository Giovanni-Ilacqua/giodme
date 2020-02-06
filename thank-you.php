<?php
    // 1. Create a database connection
    require_once("db/connect-db.php");

    // Required field names
    $required = array('firstName', 'lastName', 'email', 'message');

    // Loop over field names, make sure each one exists and is not empty
    $counter = 0;
    foreach($required as $field) {
    if (isset($_POST[$field])) {
        $counter = $counter + 1;
         
        }
    }

    if ($counter == 4) {
    
        $firstName = Trim(stripslashes($_POST['firstName'])); 
        $lastName = Trim(stripslashes($_POST['lastName'])); 
        $email = Trim(stripslashes($_POST['email']));
        $message = Trim(stripslashes($_POST['message']));
        
        
        // You really should escape all strings
        $firstName = mysqli_real_escape_string($connection, $firstName);
        $lastName = mysqli_real_escape_string($connection, $lastName);
        $email = mysqli_real_escape_string($connection, $email);
        $message = mysqli_real_escape_string($connection, $message);
        
        // 2. Perform database query
        $query  = "INSERT INTO users (firstName, lastName, email, message) VALUES ('$firstName','$lastName','$email', '$message')";
        $result = mysqli_query($connection, $query);

        

    }

    
?>




<?php
    // 4. Step 4 is unnecessary here because we didn't 
    //    get data that needs to be released
    //mysqli_free_result($result);

    // 5. Close database connection
    mysqli_close($connection);
?>

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

    <main class="container white-background margin-top full-height">

        <h2>CONTACT ME</h2>

        <p class="mal-align">
            For any inquiries on the workout programs, or if you are interested in hiring me for additional personal training services, 
            you can email me directly at <a class="link" href ="mailto:no-spam@example.com">ilacqua.giovanni@gmail.com</a>
            or message me on Instagram at <a class="link" target="_blank" href="https://www.instagram.com/giodme/">@giodme</a>.
        </p>
        

        <div class="thanks-message">
            <h3>Thank you for contacting me!</h3>
            <p>You should receive a reply within the next 24 hours.</p>
        </div>

    </main>

    <?php include 'include/scripts.inc'; ?>
</body>

</html>