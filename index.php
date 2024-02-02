<?php 
    $title="Functions and Filters"; 
    $books = [
        [
            "name" => "Do Androids Dream of Electric Sheep",
            "year" => 1968,
            "author" => 'Philip K. Dick',
            "purchaseUrl" => '#',
            "cover" =>"./assets/covers/androids.webp"
        ],
        [
            "name" => "The Langoliers",
            "year" => 1995,
            "author" => 'Stephen King',
            "purchaseUrl" => '#',
            "cover" =>"./assets/covers/langoliers.jpg"
        ],
        [
            "name" => "Project Hail Mary",
            "year" => 2021,
            "author" => 'Andy Weir',
            "purchaseUrl" => '#',
            "cover" =>"./assets/covers/hailMary.jpg"
        ],
        [
            "name" => "The Martian",
            "year" => 2011,
            "author" => 'Andy Weir',
            "purchaseUrl" => '#',
            "cover" =>"./assets/covers/martian.webp"
        ]
    
    ];

    function filterByAuthor($books, $author){

            $authorBooks = [];

            foreach($books as $book){

                if($book['author'] === $author){
                    $authorBooks [] = $book;
                } 
            }
            return $authorBooks;  
    }

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
    <h2 class="muted-text">PHP - <?= $title ?></h2>
    <h3 class="muted-text">Recommended Books Filtered by Author</h3>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $key => $book) : ?>
            <div class="card">
                <dl>
                    <dt class="muted-text"><?= $key+1 ?></dt>
                    <dd><span class="muted-text">Name:</span> <?= $book['name'] ?></dd>
                    <dd><span class="muted-text">Year:</span> <?= $book['year'] ?></dd>
                    <dd><span class="muted-text">Written by: </span> <?= $book['author'] ?></dd>
                </dl>
                <a class="button button1" href="<?= $book['purchaseUrl'] ?>">Buy this book</a>
                <img class="cover" src="<?= $book['cover'] ?>" alt="">
            </div>
    <?php endforeach; ?>  
</body>
</html>