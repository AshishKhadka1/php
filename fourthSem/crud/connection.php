<?php
$hostname = "localhost";
$username = "admin";
$password = "";
$database = "crud";

$conn = new mysqli($hostname, $username, $password, $database);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}