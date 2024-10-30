<?php
session_start();
session_destroy(); // Destroy the session
header('Location: index.php?page=home'); // Redirect to home after logout
exit();
?>

