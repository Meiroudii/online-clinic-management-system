<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'One Care'; ?></title>
    <link rel="stylesheet" type="text/css" href="./assets/css/homestyle.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/subha.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
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

