<?php

require_once __DIR__.'/classes/Movie.php';

$firstMovie = new Movie(
    'Top Gun Maverick',
    'Action',
    true,
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ducimus!'
    
);

var_dump($firstMovie);



$secondMovie = new Movie(
    'Avatar',
    'Adventure',
    false,
    null
);

var_dump($secondMovie);