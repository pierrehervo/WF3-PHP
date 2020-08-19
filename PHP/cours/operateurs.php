<?php

// Les opérateurs arithmétiques

//Addition
//symbole: +
//usage: $a + $b

//Soustraction
//Symbole: -
//Usage: $a - $b

//Multiplication
//symbole: *
//Usage: $a * $b

//Division
//symbole: /
//usage: $a / $b

//Identité
//Convertis $a en Integer ou Float
//symbole: +
//usage: +$a
// $a="42"; +$a;
$a="42";
var_dump($a);
echo"<br>";
$a = +$a;
var_dump($a);

//Négation
//L'inverse de $a
//symbole: -
//usage: -$a
$a=42;
var_dump($a);
echo"<br>";
$a= -$a;
var_dump($a);
echo"<br>";

//Modulo
//Retourne l'entier restant d'une division
//symbole: %
//usage: $a % $b
var_dump(4 % 2);
echo"<br>";
var_dump(5 % 2);
echo"<br>";

//Exponentielle
//symbole: **
//usage: $a **$b
var_dump(5 ** 2);
echo"<br>";


// L'opérateur d'affectation

//symbole: =
//$a = 42  j'affecte l'opérateur 42 à la variable $a


//Les opérateurs de comparaison

//Egal
//symbole: ==
//usage: $a == $b
var_dump( 5 == "5"); //me retourne vraie car elle teste que les valeurs
echo"<br>";

//Identique
//symbole: ===
//usage: $a === $b
var_dump( 5 === "5"); //Retourne false parce que un nombre entier n'est pas égal avec une chaine de charactère car elle teste la valeur mais aussi le typage (l'entier et la chaine de cara)

//Inverse
//Retourne la valeur inverse
//symbole: !
// usage: !$a
$a = true;
var_dump($a);//me retourne donc true
echo"<br>";
var_dump(!$a);//va me retourner false
echo"<br>";

//Différent
//Test si deux valeurs sont différentes
//symbole != ou <>
//usage: $a != $b
var_dump(5 !="5");
echo"<br>";

//Strictement Différent
//Test si deux valeurs ET types sont différentes
//symbole !== 
//usage: $a !== $b
var_dump(5 !=="5"); //Me retourne OUI c'est différent,
echo"<br>";

//Strictement inférieur

//symbole <
//usage: $a < $b
echo("5 < 5 :");
var_dump(5 <"5");
echo"<br>";
echo("4 < 5 :");
var_dump(4 < "5");
echo"<br>";

//Strictement superieur
//symbole >
//usage: $a > $b
echo("5 > 5 :");
var_dump(5 >"5");
echo"<br>";

echo("4 > 5 :");
var_dump(6 > 5);
echo"<br>";

// Inférieur ou Egal
//symbole: <=
//usage: $a <= $b
echo("5 <= 5 :");
var_dump(5 <= "5");
echo"<br>";
echo("4 <= 5 :");
var_dump(4 <= "5");
echo"<br>";


// superieur ou Egal
//symbole: >=
//usage: $a >= $b
echo ("5 >= 5 :");
var_dump(5 >="5");
echo"<br>";
echo ("4 >= 5 :");
var_dump(4 >="5");
echo"<br>";


//Combiné
//Symbole : <=>
//Usage : $a <=> $b
echo(" 5 <=> 5 : ");
var_dump( 5 <=> "5" );
echo"<br>";

echo(" 4 <=> 5 : ");
var_dump( 4 <=> "5" );
echo"<br>";



// Opérateurs d'incrémentation et décrémentation
$a = 42;

//Incrémentation
//symbole: ++

//Pré-incrémentation
//usage: ++$a;

echo" ++$a =";
var_dump(++$a);
echo "<br>";
var_dump($a);
echo"<br>";

//Post-Incrémentation
//usage: $a++; Ca rajoute 1 à ma valeur
var_dump($a++);
echo"<br>";
var_dump($a);
echo"<br>";

/*--------------------------*/

//décrémentation
//symbole: --

//Pré-décrémentation
//usage: --$a;

echo" --$a =";
var_dump(--$a);
echo "<br>";
var_dump($a);
echo"<br>";

//Post-décrémentation
//usage: $a--; Ca enleve 1 à ma valeur
var_dump($a--);
echo"<br>";
var_dump($a);
echo"<br>";


//Opérateur de chaines
//symbole: .
$a ="Hello";
echo $a . " World<br>";

// Opérateurs de tableaux
//union de tableau
//symbole +
$a = [0=>"Pommes", 1=> "Poires"];
$b = [3=>"Fraises", 4=> "Kiwis"];
$c= $a+$b;
print_r($a);
echo"<br>";
print_r($b);
echo"<br>";
print_r($c);
echo"<br>";

//Affectation dans un tableau
//symbole: =>
//usage: ["firstname"=>"Bob"]


//LES OPERATEURS LOGIQUES

//table de vérité ET logique
//  a  |  b  |  a ET b  |
// FAUX| FAUX|  FAUX
// FAUX| VRAI|  FAUX
// VRAI| FAUX|  FAUX
// VRAI| VRAI|  VRAI

//symbole: AND
//symbole: &&
//usage: $a AND $b
//usage: $a && $b


//table de vérité OU logique
//  a  |  b  |  a OU b  |
// FAUX| FAUX|  FAUX
// FAUX| VRAI|  Vrai
// VRAI| FAUX|  Vrai
// VRAI| vrai|  VRAI

//symbole: OR
//symbale: ||
//usage: $a OR $b
//usage: $a || $b


//Opérateur NON logique
//Retourne la valeur inverse
//symbole: !
// usage: !$a
$a = true;
var_dump($a);//me retourne donc true
echo"<br>";
var_dump(!$a);//va me retourner false
echo"<br>";

//Opérateur OU exclusif
//symbole: XOR
//usage:
//  a  |  b  |  a XOR b  |
// FAUX| FAUX|  FAUX
// FAUX| VRAI|  Vrai
// VRAI| FAUX|  Vrai
// VRAI| vrai|  FAUX

