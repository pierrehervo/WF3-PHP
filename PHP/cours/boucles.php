<?php

//WHILE execute le code teant que la condition est vrai
$i = 0;

while($i < 10){
    echo ++$i;
    echo "<br>";
}
echo "<hr>";


//DO WHILE execute le code au moins une fois avant le teste de la condition donc la ce sera au moins 10+1 donc 11 donc il s'arretera juste apres vu que j'ai marqué  que si la condition est sup ou égale à 10 ca doit s'arreter
$i = 10;

do{
    echo ++$i;
    echo"<br>";
}while($i < 10);
echo"<hr>";


//FOR
for ($i=0; $i < 10; $i++){
    echo $i;
    echo "<br>";
}
echo "<hr>";


//FOR EACH

$fruits = ["fraises","cerises","bananes"];

foreach ($fruits as $key => $fruit) {
    echo $key . " ==>" .$fruit . " <br>";
}
echo"<hr>";
foreach ($fruits as $fruit) {
    echo " ====>" .$fruit . " <br>";
}
echo"<hr>";

