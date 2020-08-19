<?php
//==============================================================================
// CONFIGURATION
//==============================================================================
//-----------------------------------------------------
// 1. Definition de l'environnement d'exécution
//-----------------------------------------------------
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
//-----------------------------------------------------
// 2. Definition des paramètres de connexion à la base de données
//-----------------------------------------------------
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_port = "3306";
$db_type = "mysql";
$db_name = "wf3_movies";
$db_charset = "utf8";