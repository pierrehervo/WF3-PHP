<?php

$a = 42;
$b = 72;


// IF
if ( $a < $b){
    echo "Structure IF<br>";
    echo $a . " est inférieur à " . $b;
    echo "<br>";
}



// IF / ELSE
echo "<hr>";
 if ($a < $b){
    echo "Structure IF/ELSE<br>";
    echo $a . " est inférieur à " . $b;
    echo "<br>";
} else {
    echo "Structure IF/ELSE<br>";
    echo $a . " n'est pas inférieur à " . $b;
    echo "<br>";
}

// IF / ELSE IF

echo "<hr>";
 if ($a < $b){
    echo "Structure IF/ELSE IF<br>";
    echo $a . " est inférieur à " . $b;
    echo "<br>";
} else if ( $a === $b) {
    echo "Structure IF/ELSE IF<br>";
    echo $a . " est égal à " . $b;
    echo "<br>";
}


// IF / ESLE IF / ELSE

echo "<hr>";
 if ($a < $b){
    echo "Structure IF/ELSE IF /ELSE<br>";
    echo $a . " est inférieur à " . $b;
    echo "<br>";
} else if ( $a === $b) {
    echo "Structure IF/ELSE IF/ ELSE<br>";
    echo $a . " est égal à " . $b;
    echo "<br>";
} else {
    echo "Structure IF/ELSE IF /ELSE<br>";
    echo $a . " est supérieur à " . $b;
    echo "<br>";
}



 //SWITCH utile quand on connait les résultats deja
 switch ($a){
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
        echo"\$a ni 0, 1, 2 ou 3";

 }

 //TERNAIRE
 //symbole ?

 if ($condition){
     // Si condition= TRUE
     $a="xxx";
 }
 else{
     //Si condition = FALSE
     $a = "yyy";
 }
// Le ternaire c'est comme if/else mais écrite en une seule ligne du coup le ? remplace le si et les : remplace le else
 $a = $condition ? "xxx" : "yyy";