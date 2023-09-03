<?php

require_once __DIR__.'/classes/Movie.php';

$firstMovie = new Movie(
    'Top Gun Maverick',
    'Action',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ducimus!',
    true
);

var_dump($firstMovie);



$secondMovie = new Movie(
    'Avatar',
    'Adventure',
    null,
    false
);

var_dump($secondMovie);