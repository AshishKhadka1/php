<?php
// Start a session or resume the existing session
session_start();

// Set a session variable
$_SESSION['username'] = 'AshishKhadka';
$_SESSION['user_id'] = 12345;

echo 'Session created with username: ' . $_SESSION['username'];
?>
