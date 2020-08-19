<?php
//La seulement déclarée, il se passe rien
function addition_1(){
    echo 1 + 1;
}
// et la je l'appelle du coup elle sort sur mon navigateur (parceque j'ai mis echo dans la fonction)
addition_1();
echo"<br>";

//---------------
// avec return il faudra mettre l'echo à l'appel de la fonction et non plus dans la fonction et on êut réutiliser cette fonction, contrairement à celle du dessus donc à privilégier cette syntaxe
function addition_2(){
 return 1 + 2;
}
echo addition_2();
echo"<br>";

//Fonction avec 1 parametre en entrée
function addition_3($a){
    return 1 + $a;
}
echo addition_3(4); //ca va affecter 4 à la variable $a donc 1 + 4 = 5
echo"<br>";
echo addition_3(10); //ca va affecter 10 à la variable $a donc 1 + 10 = 11

//Fonction avec un parametre facultatif en entrée
function addition_4($a = 0){
    return 1 + $a;
}
echo addition_4();// avec le 0 on peut donc faire la fonction même si on ne lui a rien attribué (0 = attente d'un parametre) donc la ça me retourne 1 et non pas une erreur
echo"<br>";

function addition_5 ($a, $b=0){
    return $a + $b;
}
echo addition_5(10, 4);// donc la $a prend la valeur 10 et la $b vaut 4. Le parametre obligatoire doit toujours etre devant le facultatif
