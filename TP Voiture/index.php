<?php
//==============================================================================
// LISTE DES VOITURES
//==============================================================================
//-----------------------------------------------------
// 1. Connexion à la BDD
//-----------------------------------------------------
// Inclusion du fichier "dbconnect.php" qui exécute la connexion à la base 
// de données
require_once "dbconnect.php";
//-----------------------------------------------------
// 2. Récupération de la liste des véhicules
//-----------------------------------------------------
// Définition de la requete
$sql = "SELECT `id`, `marque`, `model`,`photo` FROM `vehicule`";
// Execution de la requete
$response = $db->query( $sql );
// Recupération des résultats
$vehicules = $response->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Les Voitures</title>
    </head>
    <body>
        
        <h1>Liste des voitures</h1>

        <a href="add_vehicule.php">Ajouter un véhicule</a>

        <div>

        <!-- Boucle sur la liste des $voiture -->
        <?php foreach($vehicules as $vehicule): ?>

            <!-- pour chaque $vehicule, on affiche l'ID, la marque et le model -->
            ID: <?= $vehicule[0] ?> <br>
            
            <!-- On utilise le titre comme lien vers le firchier vehicule.php -->
            <!-- le lien correspond au model: vehicule.php?id=42 -->
            Marque: 
            <a href="vehicule.php?id=<?= $vehicule[0] ?>">
                <?= $vehicule[1] ?>
            </a> <br>

            model: <?= $vehicule[2] ?> <br>
            <br>
            photo: <img src="images/<?= $vehicule[3]?>" height="150px" width="150px"><br><br>
        <?php endforeach; ?>

        </div>
    </body>
</html>