<?php
session_start();

$_SESSION['username'] = 'AshishKhadka';
$_SESSION['user_id'] = 12345;

echo 'Session created with username: ' . $_SESSION['username'];
?>
