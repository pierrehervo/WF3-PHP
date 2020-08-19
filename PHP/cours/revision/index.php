<?php
//==============================================================================
// LISTE DES FILMS
//==============================================================================
//-----------------------------------------------------
// 1. Connexion à la BDD
//-----------------------------------------------------
// Inclusion du fichier "dbconnect.php" qui exécute la connexion à la base 
// de données
require_once "db_connect.php";
//-----------------------------------------------------
// 2. Récupération de la liste des films
//-----------------------------------------------------
// Définition de la requete
$sql = "SELECT `id`, `title`, `year` FROM `film`";
// Execution de la requete
$response = $db->query( $sql );
// Recupération des résultats
$films = $response->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des films</title>
</head>
<body>
    
    <h1>Liste des films</h1>

    <a href="create.php">Ajouter un film</a>

    <div>

    <!-- Boucle sur la liste des $films -->
    <?php foreach($films as $film): ?>

        <!-- pour chaque $film, on affiche l'ID, le titre et l'année -->
        ID: <?= $film[0] ?> <br>
        
        <!-- On utilise le titre comme lien vers le firchier read.php -->
        <!-- le lien correspond au model: read.php?id=42 -->
        Titre: 
        <a href="read.php?id=<?= $film[0] ?>">
            <?= $film[1] ?>
        </a> <br>

        Année: <?= $film[2] ?> <br>
        <br>
    <?php endforeach; ?>

    </div>
</body>
</html>