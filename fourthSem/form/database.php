<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

// Establishing a connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);

// Checking if the connection was successful
if (!$conn) {
    // If connection fails, output the error and terminate the script
    die(mysqli_error($error));
}
?>
