<?php
// Include the file containing database connection code
include 'database.php';

// Retrieve data submitted via POST method
$name = $_POST['name'];
$phone = $_POST['tel'];

// Construct SQL query to insert data into 'info' table
$sql = "INSERT INTO info (name, phone) VALUES('$name', '$phone')";

// Execute SQL query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Redirect user to 'form.php' if successful
    header("location:form.php");
} else {
    // If query fails, output the MySQL error
    echo mysqli_error($conn);
}
