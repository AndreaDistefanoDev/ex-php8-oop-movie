<?php
// Importo trait

require_once './Traits/HasDirector.php';

// Importo Classi

require_once './Models/Genre.php';
require_once './Models/Movie.php';
require_once './db.php';

// Assegno il regista ai film tramite il metodo setDirector() del trait HasDirector
$movies[0]->setDirector('Sam Raimi');
$movies[1]->setDirector('Sam Raimi');
$movies[2]->setDirector('Sam Raimi');





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
    <div class="container">
        <header>
            <h1>Movies</h1>
        </header>
        <div class="container">
            <div class="row">
                <?php
                foreach ($movies as $movie) {

                ?>
                    <div class="col">
                        <div class="card">
                            <div class="car-body">

                                <h5 class="card-title"><?php echo $movie->title ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->getDirector() ?></h6>
                                <p class="card-text"><?php echo $movie->getGenre() ?></p>
                                <p class="card-text"><?php echo $movie->description ?></p>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>