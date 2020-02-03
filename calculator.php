<?php


$Operation = readline("Welke operatie wil je uitvoeren? (+, -, %)");


if ($Operation !== "-") {
    if ($Operation !== "+") {
        if ($Operation !== "%") {


            echo ($Operation . " Is not an operator");
            exit;
        }
    }
}


if ($Operation === "+") {



    $getal1 = readline("Eerste getal?");



    if (is_numeric($getal1)) {
    } else {
        echo ($getal1 . " is geen getal");
        exit;
    }

    $getal2 = readline("Tweede getal?");


    if (is_numeric($getal2)) {
    } else {
        echo ($getal2 . " is geen getal");
        exit;
    }

    $output = $getal1 + $getal2;
}

if ($Operation === "-") {

    $getal1 = readline("Eerste getal?");


    if (is_numeric($getal1)) {
    } else {
        echo ($getal1 . " is geen getal");
        exit;
    }

    $getal2 = readline("Tweede getal?");

    if (is_numeric($getal2)) {
    } else {
        echo ($getal2 . " is geen getal");
        exit;
    }


    $output = $getal1 - $getal2;
}

if ($Operation === "%") {

    $getal1 = readline("Eerste getal?");

    if (is_numeric($getal1)) {
    } else {
        echo ($getal1 . " is geen getal");
        exit;
    }

    $getal2 = readline("Tweede getal?");

    if (is_numeric($getal2)) {
    } else {
        echo ($getal2 . " is geen getal");
        exit;
    }


    $output = $getal1 % $getal2;
}








echo ("Het antwoord is:" . $output);
