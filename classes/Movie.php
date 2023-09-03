<?php

class Movie {
    public $title;
    public $genre;
    public $description;
    private $available;

    public function __construct(
        $title,
        $genre,
        $description = null,
        $available = true
    ) {
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
        $this->available = $available;
    }


    public function getAvailable() {
       return $this->available;
    }


    public function setAvailable($available) {
        if(is_bool($available)) {
            $this->available = $available;
        }
    }

}