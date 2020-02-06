<?php
    require_once("db/connect-db.php");
    
    if (isset($_POST['var'])) {
        $email = Trim(stripslashes($_POST['var']));


        $email = mysqli_real_escape_string($connection, $email);
        $message = 'Captured from free workout program donwload';

        
        $query  = "INSERT INTO users (firstName, lastName, email, message) VALUES ('null','null','$email', '$message')";
        $result = mysqli_query($connection, $query);
    } else {
        echo 'not set!';
    }

    mysqli_close($connection);

?>
