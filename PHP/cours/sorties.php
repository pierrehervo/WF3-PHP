<?php
$fruits = ["pommes", "poires"];
//Les sorties navigateur
echo "Hello PHP";
echo "<br>";

print "Sortie avec Print"; //avec print il test la sortie et nous dit si c'est bon ou pas, mais plus lent du coup
echo"<br>";

//Les sorties de débug

//avec "print_r"
print_r("Hello World");
echo "<br>";

echo $fruits;
print_r($fruits);

//avec var_dump()
var_dump($fruits);
echo"<br>";


echo"Debug de TRUE:";
var_dump(true);
echo"<br>";
echo"Debug de FALSE:";
var_dump(false);
echo"<br>";