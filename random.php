<?php

$bond_movies = array( 
    "Dr. No",
    "From Russia with Love", 
    "Goldfinger", 
    "Thunderball", 
    "You only live Twice"
);

echo $bond_movies[mt_rand(0, count($bond_movies)-1)];