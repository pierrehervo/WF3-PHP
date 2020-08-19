<?php
//==============================================================================
// AJOUTER UN VEHICULE
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
// La définition des variables suivante nous permet d'éviter les erreurs de 
// variables inconnue dans le fichier "form.php"
$marque = null;
$model = null;
$description = null;
$photo = null;
//-----------------------------------------------------
// 4. Récupération des données du formulaire
//-----------------------------------------------------
// On test la methode utilisé par la requête HTTP, 
// Si la méthode est du type POST, on peut traiter les données du formilaire
if ( $_SERVER['REQUEST_METHOD'] === "POST")
{
    /* 1. Initialisation des erreurs */
    $errors = [];
    /* 2. récupération des données */
    $marque          = isset($_POST['marque']) ? trim(htmlentities($_POST['marque'])) : null;
    $description    = isset($_POST['description']) ? trim(htmlentities($_POST['description'])) : null;
    $model           = isset($_POST['model']) ? trim(htmlentities($_POST['model'])) : null;
    $photo          = isset($_FILES['photo']) ? $_FILES ['photo'] : null;

    /* 3. Controle des données */
    // Controle du champ $marque
    // Le titre est obligatoire (pas vide, pas null)
    if (strlen($marque) <= 0) {
        $errors['marque'] = "La marque doit être précisée";
    }
    // Controle du champ $description
    // La description dot avoir au moins 10 caractères
    if (strlen($description) < 10) {
        $errors['description'] = "Le description doit contenir au moins 10 caractères";
    }
    // Controle du champ $model
    if (strlen($model) <= 0) {
        $errors['model'] = "Le model doit être précisée";
    }

    /*4. Traitement de l'image*/
    if ($photo != null && $photo['error'] == 0)
    {
        //Controle du fichier image Le fichier doit avoir l'extension .jpg .jpeg .gif ou .png
        if (!preg_match("/\.(jpg|jpeg|gif|png)$/", $photo['name'], $matches))
        {
            $errors['photo'] = "Le type de l'image n'set pas valide";
        }

        //COntrole de la taille du fichier
        if($photo['size'] > 2000000) {
            $errors['photo'] = "La taille de l'image est supérieur à 2Mo.";
        }

        if (empty($errors))
        {
        //Récupération de l'extension d'origine
        $pathinfo = pathinfo($photo['name']);
        $extension = $pathinfo['extension']; 

        //définition du nom de fichier, celui-ci doit être unique
        $filename = uniqid();
        $filename.=".".$extension;

        $filepath = "images/".$filename; /*définition de l'emplacement du fichier*/

        //Déplacement du fichier vers répertoire "images/"
        copy ($photo['tmp_name'], $filepath);

        //Association de l'image à la fiche du film (voir partie 5)
        
        }
    }
    

    /* 5. Enregistrement des données dans la BDD */
    if (empty($errors)) 
    {
        // Définition de la requete
        $sql = "INSERT INTO vehicule (`marque`,`description`,`model`,`photo`) VALUES (:marque,:description,:model,:photo)";
        // Préparation de la requête
        $q = $db->prepare($sql);
        $q->bindParam(':marque', $marque);
        $q->bindParam(':description', $description);
        $q->bindParam(':photo', $filename);
        $q->bindParam(':model', $model, PDO::PARAM_INT);
        // Execution de la requete
        $q->execute();
        // Récupération du dernier ID que j'ai ajouter à la base de données
        $id = $db->lastInsertId();
        // Redirection de l'utilisateur vers la page de détail du film
        header("location: vehicule.php?id=".$id);
        exit;
    }
}
//-----------------------------------------------------
// 3. On affiche le formulaire
//-----------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation d'un véhicule</title>
</head>
<body>
    
    <h1>Ajouter un véhicule</h1>

    <form method="post" enctype="multipart/form-data">

        <?php 
        // Inclusion du fichier "form.php"
        // Le fichier form.php contient le formulaire commun à "create.php" et 
        // "update.php"
        include "form.php" 
        ?>

        <button type="submit">Ajouter</button>
    </form>

</body>
</html>