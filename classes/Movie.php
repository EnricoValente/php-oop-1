<?php

class Movie {
    public $title;
    public $genre;
    private $available;
    public $description;

   
    public function __construct(
        $title,
        $genre,
        $available,
        $description = null,
    ) {
        $this->title = $title;
        $this->genre = $genre;
        $this->setAvailable($available);
        $this->description = $description;
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