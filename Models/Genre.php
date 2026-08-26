<?php

// Creiamo la Classe Genre
class Genre
{

    // Proprietà della Classe Genre
    protected $name;
    protected $description;


    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    // Creiamo un metodo per ottenere il nome del genere
    public function getName()
    {

        return $this->name;
    }
}
