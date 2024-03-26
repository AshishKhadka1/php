<?php

include 'database.php';

$inputTemperature = $_POST['name']; // Assuming the input field is named 'name', not 'temperature'
$inputUnit = $_POST['unit'];
$outputUnit = $_POST['convert-unit'];

$name = htmlspecialchars($inputTemperature); // Assuming you want to sanitize the input temperature
$temperature = htmlspecialchars($inputTemperature); // Assuming you want to sanitize the input temperature

if ($inputUnit === "celsius") {
    $fahrenheit = ($temperature * 9 / 5) + 32;
    $sql = "INSERT INTO temperature (name, temperature_method, celsius) VALUES ('$name', '$inputUnit', '$fahrenheit')";
} else if ($inputUnit === "fahrenheit") {
    $celsius = ($temperature - 32) * 5 / 9;
    $sql = "INSERT INTO temperature (name, temperature_method, celsius) VALUES ('$name', '$inputUnit', '$celsius')";
}

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: ./php/table.php");
} else {
    echo mysqli_error($conn);
}
?>
