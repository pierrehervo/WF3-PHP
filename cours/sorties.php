<?php 

$fruits = ["Pommes", "Poires", 42];

// Sorties navigateur

// avec "echo"
echo "Hello PHP";
echo "<br>";

// avec "print"
print "Sortie avec Print";
echo "<br>";

// Sorties de debug

// avec "print_r"
print_r("Hello world");
echo "<br>";

echo $fruits;
echo "<br>";
print_r($fruits);
echo "<br>";

// avec var_dump()
var_dump($fruits);
echo "<br>";

echo "Debug de TRUE : ";
print_r( true );
echo "<br>";

echo "Debug de FALSE : ";
print_r( false );
echo "<br>";

echo "Debug de TRUE : ";
var_dump( true );
echo "<br>";

echo "Debug de FALSE : ";
var_dump( false );
echo "<br>";