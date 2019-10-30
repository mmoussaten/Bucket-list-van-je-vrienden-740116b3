<?php

$stacks = array();
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL ;
$antwoord=readline();

if(is_numeric($antwoord)) {
    for ($i = 0; $i < $antwoord; $i++) {
        echo "Wat is jouw naam?" . PHP_EOL;
        $naam = readline();
        echo "Wat is jouw droom?" . PHP_EOL;
        $stacks[$i] = readline();
    }

    echo "Op jouw bucket list staat:\n";
    for ($i = 0; $i < count($stacks); $i++) {
        echo $stacks[$i] . PHP_EOL;

    }
} else {
    echo "is geen geldig getal balzak, probeer het opnieuw";
}

