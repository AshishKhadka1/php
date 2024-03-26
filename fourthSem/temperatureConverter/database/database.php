<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "temperature_conv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

echo "<h1 class='connected-heading'>" . "Connected successfully" . "</h1>";

?>;