<?php
// Start a session or resume the existing session
session_start();

// Remove a specific session variable
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    echo 'User ID removed from session.';
} else {
    echo 'User ID not found in the session.';
}

// Destroy the entire session
session_destroy();
echo 'Session destroyed.';
?>
