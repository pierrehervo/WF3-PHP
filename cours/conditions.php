<?php

$a = 10;
$b = 42;

// IF
if ( $a < $b ) {
    echo "Structure IF<br>";
    echo $a . " est inférieur à " . $b;
    echo "<hr>";
}


// IF / ELSE
if ( $a < $b ) {
    echo "Structure IF/ELSE<br>";
    echo $a . " est inférieur à " . $b;
    echo "<hr>";
}
else {
    echo "Structure IF/ELSE<br>";
    echo $a . " n'est pas inférieur à " . $b;
    echo "<hr>";
}



// IF / ELSE IF
if ( $a < $b ) {
    echo "Structure IF/ELSE IF<br>";
    echo $a . " est inférieur à " . $b;
    echo "<hr>";
}
else if ( $a == $b ) {
    echo "Structure IF/ELSE IF<br>";
    echo $a . " est égale à " . $b;
    echo "<hr>";
}



// IF / ELSE IF / ELSE
if ( $a < $b ) {
    echo "Structure IF/ELSE IF/ELSE<br>";
    echo $a . " est inférieur à " . $b;
    echo "<hr>";
}
else if ( $a == $b ) {
    echo "Structure IF/ELSE IF/ELSE<br>";
    echo $a . " est égale à " . $b;
    echo "<hr>";
}
else {
    echo "Structure IF/ELSE IF/ELSE<br>";
    echo $a . " est supérieur à " . $b;
    echo "<hr>";
}



// SWITCH
switch ($a) {
    case 0:
        echo "\$a vaux 0";
        break;
    case 1:
        echo "\$a vaux 1";
        break;
    case 2:
        echo "\$a vaux 2";
        break;
    case 3:
        echo "\$a vaux 3";
        break;
    
    default:
        echo "\$a ne vaux ni 0, 1, 2 ou 3";
}