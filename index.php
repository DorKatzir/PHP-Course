<?php
 $title="PHP-Course";
 $name = "Dark Matter"; 
 $isRead = true;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/php-elephant.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title><?= $title ?></title>
</head>
<body>
    <h2>PHP - Complete Laracasts Course</h2>
    <p><?= $isRead ? "You have read the $name" : "You have NOT read the $name"  ?></p>
</body>
</html>