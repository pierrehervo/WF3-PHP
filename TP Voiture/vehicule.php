<?php
//==============================================================================
// AFFICHE LES DETAILS D'UN VEHICULE
//==============================================================================
//-----------------------------------------------------
// 1. Connexion à la BDD
//-----------------------------------------------------
// Inclusion du fichier "dbconnect.php" qui exécute la connexion à la base 
// de données
require_once "dbconnect.php";
//-----------------------------------------------------
// 2. Définition des variables
//-----------------------------------------------------
// On déclare $film avec une valeur par defaut
// Plutard, nous executerons une requête pour récupérer les données du film
// Si la requête ne trouve aucun résultat, PDO retournera FALSE
$vehicule = false;
// Définition de la variable $id
// On récupère de l'identifiant du film depuis le paramètre "id" trasmit dans
//  l'URL. e.g.: www.site.com?id=42
$id = isset($_GET['id']) ? trim($_GET['id']) : null;
// Si $id est de type numerique (digit), on prpcède à la récupération des 
// données du film
if (ctype_digit($id)) 
{ 
    // Définition de la requete
    $sql = "SELECT `id`, `marque`, `model`, `photo`, `description` FROM `vehicule` WHERE id=:id";
    // Préparation de la requete
    $q = $db->prepare($sql);
    $q->bindParam(':id', $id, PDO::PARAM_INT);
    // Execution de la requete
    $q->execute();
    // Récupération des données
    // Resultats sous forme de tableau associatif
    // $film = $q->fetch(PDO::FETCH_ASSOC); // $film['title']
    // Résultat sous forme d'objet stdClass 
    $vehicule = $q->fetch(PDO::FETCH_OBJ); // $film->title
}
//-----------------------------------------------------
// 4. Affichage des données en HTML
// 
// > 4.a. Affiche les données du film
// > 4.b. Affiche le message "404 not found" si le film n'existe pas
//-----------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php if ($vehicule): ?>
            Marque : <?= $vehicule->marque ?> <br>
            Description : <?= $vehicule->description ?> <br>
            Model : <?= $vehicule->model ?> <br> <br>

            <img src="images/<?= $vehicule->photo?>" alt="<?= $vehicule->marque ?>"><br><br>

        <?php else: ?>
            Le vehicule est introuvable
        <?php endif; ?>
    </body>
</html>