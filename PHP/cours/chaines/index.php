<?php
$str_fruits ="Pommes, Poires, Bananes";

echo "<pre>";
var_dump($str_fruits);
echo "</pre>";

$arr_fruits = explode (",", $str_fruits);

echo "<pre>";
var_dump($arr_fruits);
echo "</pre>";

echo "<pre>";
var_dump(join ("-",$str_fruits));
echo "</pre>";