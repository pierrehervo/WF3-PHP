<?php

$env = "dev"; // dev | prod
if ($env = "dev") {
    // Force la config PHP à afficher et loguer les messages d'erreurs
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    // Force la config PHP à afficher et loguer les messages d'erreurs
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(NONE);
}

//Définition des parametres de connexion à la BDD
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_port = "3306";
$db_type = "mysql";
$db_name = "wf3_voitures";
$db_charset = "utf8";