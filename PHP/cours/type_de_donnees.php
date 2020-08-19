<?php
// Une chaine de caractères
$string = "Hello";

//un entier
$integer = 42;

//un decimal
$decimal = 21.5;

// Les Booléens
$unBoolVrai = true;
$unBoolFaux = false;

// Les tableaux:
//Le tableau numérique
$tabNum = ["Pommes","Poire",12,"Bananes"];
//ou écrit ainsi-> $tabNum = array("Pommes","Poire",12,"Bananes");
$tabnum[1]; //me retourne les poires

//Le tableau associative
$tabAssoc = [
    'firstname' => "Bruce",
    'lastname' => "Wayne",
];
$tabAssoc['firstname'];//me retourne Bruce

//les objets
$objet_a = new stdClass;
$objet_a->firstname ="Bob";
//$objet_a->firstname; me retourne bob

$objet_b = (objet) [
    'firstname' =>"Franck"
];


// Le type NULL
$typeNull = NULL; //sert pour réinitialiser une variable 

// Les fonctions
function nomDeMaFonction() {
    //code à exécuter
    return 42;
}