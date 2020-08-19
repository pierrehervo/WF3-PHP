<?php
//==============================================================================
// CONNEXION A LA BASE DE DONNEES
//==============================================================================
//-----------------------------------------------------
// 1. Definition des variables
//-----------------------------------------------------
// Inclusion du fichier "config.php" qui contient la définition des paramètres
// de connexion à la base de données
require_once "config.php";
// Définition de la phrase DSN (Domain Souce Name), utile à PDO pour identifier 
// le serveur SQL
// eg.: 'mysql:host=localhost;port=3306;dbname=DBNAME;charset=UTF-8'
$db_dsn = $db_type.":";
$db_dsn.= "host=".$db_host.";";
$db_dsn.= "port=".$db_port.";";
$db_dsn.= "dbname=".$db_name.";";
$db_dsn.= "charset=".$db_charset.";";
//-----------------------------------------------------
// 2. Création de la connexion à la BDD
//-----------------------------------------------------
try {
    $db = new PDO($db_dsn, $db_user, $db_pass);
} 
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

