<?php
// Importo trait

require_once './Traits/HasDirector.php';
require_once './Traits/CoverImg.php';

// Importo Classi

require_once './Models/Genre.php';
require_once './Models/Movie.php';
require_once './db.php';

// Assegno il regista ai film tramite il metodo setDirector() del trait HasDirector
$movies[0]->setDirector('Sam Raimi');
$movies[1]->setDirector('Sam Raimi');
$movies[2]->setDirector('Sam Raimi');

// Assegno la cover ai film tramite il metodo setCover() del trait CoverImg
$movies[0]->setCover('https://m.media-amazon.com/images/M/MV5BZWM0OWVmNTEtNWVkOS00MzgyLTkyMzgtMmE2ZTZiNjY4MmFiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg');
$movies[1]->setCover('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8Z0vcMvLEOJzRxrqsCEu6UAK55CLy6Ik_K8QCmwVYTRTVeYM1bJZLOo6r&s=10');
$movies[2]->setCover('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdRbhb7eIuySBh6McUmjHttbavfifZljAcXv0Gt6LM8Q&s=10');






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container p-5 mb-5 ">
        <div class="div">
            <header>
                <h1>Movies</h1>
            </header>
        </div>

        <div class="container p-5 mb-4">
            <div class="row g-5 align-items-center">
                <?php
                foreach ($movies as $movie) {

                ?>
                    <div class="col col-md-4 col-lg-4  mb-4">
                        <div class="card h-100 text-center bg-dark text-white shadow border-0">
                            <div class="car-body p-4">

                                <h5 class="card-title mb-4 mt-4"><?php echo $movie->title ?></h5>
                                <h6 class="card-subtitle mb-2 text-white text-center mt-4 mb-4"><?php echo $movie->getDirector() ?></h6>
                                <img class="card-img card-img-top w-100 h-100 mt-4 mb-4" src="<?php echo $movie->getCover() ?>" alt="">
                                <p class="card-text text-center mt-4"><?php echo $movie->getGenre() ?></p>
                                <p class="card-text text-center mt-4"><?php echo $movie->description ?></p>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>