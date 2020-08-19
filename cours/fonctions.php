<?php

// Déclaration
function addition_1() {
    echo 1 + 1;
}

// Appel
addition_1();
echo "<br>";


// ---------

// Déclaration d'une fonction avec sortie de fonction
function addition_2() {
    return 1 + 2;
}
echo addition_2();
echo "<br>";


// ---------

// Fonction avec 1 paramètre en entrée
function addition_3( $a )
{
    return 1 + $a;
}
echo addition_3( 4 );
echo "<br>";
echo addition_3( 10 );
echo "<br>";


// ---------

// Fonction avec 1 paramètre facultatif en entrée
function addition_4( $a = 0 )
{
    return 1 + $a;
}
echo addition_4();
echo "<br>";
echo addition_4( 5 );
echo "<br>";


// ---------

function addition_5 ($b, $a) {
    return $a + $b;
}
echo addition_5(10, 5);