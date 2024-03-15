<?php
// Start a session or resume the existing session
session_start();

// Check if a session variable exists and retrieve its value
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo 'Username retrieved from session: ' . $username;
} else {
    echo 'Username not found in the session.';
}
?>
