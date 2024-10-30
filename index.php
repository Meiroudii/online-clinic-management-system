<?php
session_start(); // Start the session

// Set default content
$content = 'pages/home.php'; // Default content file

// Check if a 'page' parameter is set in the URL
if (isset($_GET['page'])) {
    // Your routing logic here...
    // For example:
    $allowed_pages = ['home', 'appointment', 'about', 'contact', 'login', 'confirmation'];

    if (in_array($_GET['page'], $allowed_pages)) {
        $content = "pages/{$_GET['page']}.php";
    } else {
        $content = 'pages/404.php'; // Optional: Load a 404 page for invalid routes
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | OneCare</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/homestyle.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/subha.css">
    <script type='text/javascript'>
    function search(){
        btn=document.getElementById('topsearch');
        stext=btn.value;
        nurl="https://www.google.co.in/#q="+stext+"&*";
        window.location=nurl;
    }
    </script>
</head>
<body>

<?php include 'templates/partials/header.php'; ?>

<div class="container">
    <?php include $content; // Include dynamic content ?>
</div>

<?php include 'templates/partials/footer.php'; ?>

</body>
</html>

