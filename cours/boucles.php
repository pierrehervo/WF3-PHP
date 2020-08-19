<?php

// WHILE
// Exécute le code tant que la condition est VRAI
$i = 0;

while ($i < 10) {
    echo ++$i;
    echo "<br>";
}
echo "<hr>";


// DO WHILE
// Exécute le code au moins une fois avant de tester la condition,
// puis Exécute le code tant que la condition est VRAI
$i = 42;

do {
    echo ++$i;
    echo "<br>";
} while($i < 10);
echo "<hr>";


// FOR
for ($i=0; $i < 10; $i++) {
    echo $i;
    echo "<br>";
}
echo "<hr>";



// FOREACH

$fruits = ["Pommes", "Poires", "Bananes"];

foreach ($fruits as $key => $fruit) {
    echo $key . " ==> " . $fruit . " <br>";
}
echo "<hr>";

foreach ($fruits as $fruit) {
    echo " ====> " . $fruit . " <br>";
}
echo "<hr>";