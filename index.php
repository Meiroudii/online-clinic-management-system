<?php
session_start(); // Start the session

// Include the configuration file from the includes folder
include 'includes/config.php';

// Set default content
$content = 'pages/home.php'; // Default to home page

// Check if a 'page' parameter is set in the URL
if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $allowed_pages)) {
        $content = "pages/{$_GET['page']}.php"; // Load the requested page
    } else {
        $content = 'pages/404.php'; // Load a 404 page for invalid routes
    }
}

// Include the main template
include 'templates/main.php';

