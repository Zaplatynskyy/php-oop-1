<?php

// è definita una classe ‘Movie’
// all'interno della classe sono dichiarate delle variabili d'istanza
// all'interno della classe è definito un costruttore
// all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


class Movie {

    //--------- PROPERTIES

    public $title;
    public $duration;
    public $language;
    public $overwiev;
    public $release_date;


    //--------- METHODS

    //--------- construct function
    public function __construct($_title)
    {
        $this->title = $_title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    //--------- set and get functions
    public function setDuration($_duration)
    {
        $this->duration = $_duration;
    }
    public function getDuration()
    {
        return $this->duration;
    }

    public function setLanguage($_language)
    {
        $this->language = $_language;
    }
    public function getLanguage()
    {
        return $this->language;
    }

    public function setOverwiev($_overwiev)
    {
        $this->overwiev = $_overwiev;
    }
    public function getOverwiev()
    {
        return $this->overwiev;
    }

    public function setReleaseDate($_release_date)
    {
        $this->release_date = $_release_date;
    }
    public function getReleaseDate()
    {
        return $this->release_date;
    }

}

?>