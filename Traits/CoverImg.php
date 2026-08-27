<?php

trait CoverImg
{

    protected $coverMovie;

    public function setCover($coverMovie)
    {

        $this->coverMovie = $coverMovie;
    }

    public function getCover()
    {

        return $this->coverMovie;
    }
}
