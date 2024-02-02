<?php 
    $title="Functions and Filters"; 

    $movies = [
        [
            "title" => "The Shawshank Redemption",
            "jenre" => ["Drama"],
            "description" => "Over the course of several years, two convicts form a friendship, seeking consolation and, eventually, redemption through basic compassion.",
            "year" => 1994,
            "director" => "Frank Darabont",
            "poster" => "poster.jpg"
        ],
        [
            "title" => "The Godfather",
            "jenre" => ["Crime", "Drama"],
            "description" => "The aging patriarch of an organized crime dynasty transfers control of his   clandestine empire to his reluctant son.",
            "year" => 1972,
            "director" => "Francis Ford Coppola",
            "poster" => "poster.jpg"
        ],
        [
            "title" => "The Dark Knight",
            "jenre" => ['Action', 'Crime', 'Drama'],
            "description" => "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.",
            "year" => 2008,
            "director" => "Christopher Nolan",
            "poster" => "./assets/covers/darkknight.png"
        ],
        [
            "title" => "Lord of the Rings - The Return of the King",
            "jenre" => ["Action", "Adventure", "Drama"],
            "description" => "Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.",
            "year" => 2003,
            "director" => "Peter Jackson",
            "poster" => "./assets/covers/lordoftherings.png"
        ],
        [
            "title" => "Inception",
            "jenre" => ["Action", "Adventure", "Sci-Fi"],
            "description" => "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.",
            "year" => 2010,
            "director" => "Christopher Nolan",
            "poster" => "./assets/covers/inception.png"
        ]
    ];

    function filterByYear($movies) {
        $filteredMovies = [];
        foreach($movies as $movie){
            if($movie['year'] >= 2000){
                $filteredMovies[] = $movie;
            }
        }
        return $filteredMovies;
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
    <h3 class="muted-text">Movies Filtered by released year 2000 or higher </h3>
    <?php foreach (filterByYear($movies) as $movie) : ?>
            <div class="card">
                <img class="poster" src="<?= $movie['poster'] ?>">
                <ul>
                    <!-- <li><span class="muted-text">Movie</span></li> -->
                    <li><?= $movie['title'] ?></li>

                    <li><span class="muted-text">Year</span></li>
                    <li> <?= $movie['year'] ?></li>

                    <li><span class="muted-text">Director</span></li>
                    <li> <?= $movie['director'] ?></li>
                </ul>
            </div>
    <?php endforeach; ?>  
</body>
</html>