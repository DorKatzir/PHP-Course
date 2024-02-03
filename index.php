<?php 

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
    ]

];

$filterByYear = array_filter($books, function($book){
    return $book['year'] >= 1950 && $book['year'] <= 2020;
});

require "index.view.php";