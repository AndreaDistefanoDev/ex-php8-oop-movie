<?php

// Creiamo la Classe Movie 
class Movie
{

    // Proprietà della Classe Movie
    public $title;
    public $year;
    public $description;
    public $rating;
    protected Genre $genre;

    // Assegnazione dei valori alle proprietà della Classe Movie tramite il costruttore 
    public function __construct($_title, $_year, $_description, $_rating, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->description = $_description;
        $this->rating = $_rating;
        $this->genre = $_genre;
    }

    // Creiamo un metodo per ottenere il genere del film

    public function getGenre()
    {

        return $this->genre->getName();
    }
}
