<?php
$servername = "localhost"; 
$username = "username"; 
$password = "password"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$databaseName = "namuna_college";
$sql = "CREATE DATABASE $databaseName";

if ($conn->query($sql) === TRUE) {
    echo "Database '$databaseName' created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
