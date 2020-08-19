<?php

// Les opérateurs arithmétiques
// --

// Addition
// Symbole : +
// Usage : $a + $b 

// Soustraction
// Symbole : -
// Usage : $a - $b 

// Multiplication
// Symbole : *
// Usage : $a * $b 

// Division
// Symbole : /
// Usage : $a / $b 

// Identité
// Convertit $a en Integer ou Float
// Symbole : +
// Usage : +$a
// Usage : $a = "42"; +$a;
$a = "42";
var_dump($a);
echo "<br>";
$a = +$a;
var_dump($a);
echo "<br>";

// Négation
// l'inverse de $a
// Symbole : -
// Usage : -$a
$a = 42;
var_dump($a);
echo "<br>";
$a = -$a;
var_dump($a);
echo "<br>";
$a = -$a;
var_dump($a);
echo "<br>";

// Modulo
// Retourne l'entier restant d'une division
// Symbole : %
// Usage : $a % $b
var_dump( 4 % 2 );
echo "<br>";
var_dump( 5 % 2 );
echo "<br>";

// Exponentielle
// Symbole : **
// Usage : $a ** $b
var_dump( 5 ** 2 );
echo "<br>";



// Les opérateurs d'affectation
// --

// Symbole : =
// Usage : $a = 42


// Opérateurs de comparaison
// --

// Egal
// Test les valeurs
// Symbole : ==
// Usage : $a == $b
var_dump( 5 == "5" );
echo "<br>";

// Identique
// Test les valeurs ET les types de données
// Symbole : ===
// Usage : $a === $b
var_dump( 5 === "5" );
echo "<br>";

// Différent
// Test si deux valeur sont différentes
// Symbole : !=
// Usage : $a != $b
var_dump( 5 != "5" );
echo "<br>";

// Symbole : <>
// Usage : $a <> $b
var_dump( 5 <> "5" );
echo "<br>";

// Strictement Différent
// Test si les valeurs ET types sont différent
// Symbole : !==
// Usage : $a !== $b
var_dump( 5 !== "5" );
echo "<br>";

// Strictement Inferieur
// Symbole : <
// Usage : $a < $b
echo "5 < 5 = ";
var_dump( 5 < 5 );
echo "<br>";

echo "4 < 5 = ";
var_dump( 4 < 5 );
echo "<br>";

// Strictement Supérieur
// Symbole : >
// Usage : $a > $b
echo "5 > 5 = ";
var_dump( 5 > 5 );
echo "<br>";

echo "6 > 5 = ";
var_dump( 6 > 5 );
echo "<br>";


// Inferieur ou Egale
// Symbole : <=
// Usage : $a <= $b
echo "5 <= 5 = ";
var_dump( 5 <= 5 );
echo "<br>";

echo "4 <= 5 = ";
var_dump( 4 <= 5 );
echo "<br>";

echo "6 <= 5 = ";
var_dump( 6 <= 5 );
echo "<br>";

// Superieur ou Egale
// Symbole : >=
// Usage : $a >= $b
echo "5 >= 5 = ";
var_dump( 5 >= 5 );
echo "<br>";

echo "6 >= 5 = ";
var_dump( 6 >= 5 );
echo "<br>";

// Combiné
// Symbole : <=>
// Usage : $a <=> $b
echo "5 <=> 5 = ";
var_dump( 5 <=> 5 );
echo "<br>";
echo "0 <=> 5 = ";
var_dump( 0 <=> 5 );
echo "<br>";
echo "5 <=> 0 = ";
var_dump( 5 <=> 0 );
echo "<br>";


// Opérateurs d'incrémentation et décrémentation

$a = 42;
// Incrémentation

// Symbole : ++

// Pré-Incrémentation
// Usage : ++$a;

echo ' ++$a = ';
var_dump( ++$a );
echo "<br>";
var_dump( $a );
echo "<br>";

// Post-Incrémentation
// Usage : $a++;

var_dump( $a++ );
echo "<br>";
var_dump( $a );
echo "<br>";

// Décrémentation

// Symbole : --

// Pré-Décrémentation
// Usage : ++$a;

echo ' --$a = ';
var_dump( --$a );
echo "<br>";
var_dump( $a );
echo "<br>";

// Post-Décrémentation
// Usage : $a--;

var_dump( $a-- );
echo "<br>";
var_dump( $a );
echo "<br>";


// Opérateurs de chaînes

// Symbole : .
$a = "Hello";
echo $a . " World<br>";

$b = "Goodbye";
$b .= " World<br>";
echo $b;

$b = "Goodbye";
$b = $b . " World<br>";
echo $b;


// Opérateurs de tableaux
// --

// Union de tableau
// Symbole : +
// Usage : [] + []

$a = ["Pommes", "Poires"];
$b = ["Bananes", "Kiwis", "Radis"];
$c = $a+$b;
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";
print_r($c);
echo "<br>";

// Affectation
// Symbole : =>
// Usage : ["firstanme" => "Bob"]




// Les opérateurs logiques
// --

// Table de vérité ET logique

//   a  |   b  | a ET b
// --------------------
// Faux | Faux |  Faux
// Faux | Vrai |  Faux
// Vrai | Faux |  Faux
// Vrai | Vrai |  Vrai

// Symbole : AND
// Symbole : &&
// Usage : $a AND $b
// Usage : $a && $b




// Table de vérité OU logique

//   a  |   b  | a OU b
// --------------------
// Faux | Faux |  Faux
// Faux | Vrai |  Vrai
// Vrai | Faux |  Vrai
// Vrai | Vrai |  Vrai

// Symbole : OR
// Symbole : ||
// Usage : $a OR $b
// Usage : $a || $b



// Opérateur NON Logique

// Retourne la valeur inverse
// Symbole : !
// Usage : !$a
$a = true;
var_dump( $a );
echo "<br>";
var_dump( !$a );
echo "<br>";



// Opérateur OU eXclusif
// Symbole : XOR
// Usage : $a XOR $b

//   a  |   b  | a XOR b
// --------------------
// Faux | Faux |  Faux
// Faux | Vrai |  Vrai
// Vrai | Faux |  Vrai
// Vrai | Vrai |  Faux





echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";