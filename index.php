<?php 
    $title="Arrays"; 
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mary"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/php-elephant.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <title><?= "PHP Course | $title" ?></title>
</head>
<body>
    <h2>PHP - <?= $title ?></h2>
    <h3>Recommended Books</h3>
    <ul>
        <?php foreach ($books as $book) : ?> 
            <li><?= $book ?></li>
        <?php endforeach; ?> 
    </ul>
</body>
</html>