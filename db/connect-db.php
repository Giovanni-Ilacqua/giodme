<?php

// Database Variables - Localhost
// $server = 'localhost';
// $user = 'final_project';
// $pass = 'lemons';
// $db = 'final_project';

// Database Variables - Digital Scholar
$server = 'localhost';
$user = 'gilacqua_giodme';
$pass = 'LemonLover';
$db = 'gilacqua_giodme_db';

// Connect to Database
$connection = mysqli_connect($server,$user,$pass,$db);
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
// else {
//     echo "Successful connection!";
// }
?>