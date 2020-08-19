<?php

// Une chaine de caractères
$string = "Hello";

// Un entier
$integer = 42;

// un decimal
$decimal = 21.5;

// Les booléens
$unBoolVrai = true;
$unBoolFaux = false;

// Les tableaux
// Le tableau numérique
// $tabNum = array("Pommes", "Poires", 12, "Bananes");
$tabNum = ["Pommes", "Poires", 12, "Bananes"];
// $tabNum[1]; // Poires

// Le tableau associative
$tabAssoc = [
    'firstname' => "Bruce",
    'lastname' => "Wayne",
];
//  $tabAssoc['firstname']; // Bruce


// Les objets
$objet_a = new stdClass;
$objet_a->firstname = "Bob";
// $objet_a->firstname; // Bob

$objet_b = (object) [
    'firstname' => "Franck"
];


// Le type NULL
$typeNull = NULL;


// fonction
function nomDeMaFonction() {
    // code à exécuter
    return 42;
}
