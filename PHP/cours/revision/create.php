<?php
//==============================================================================
// CREATION D'UN FILM
//==============================================================================
//-----------------------------------------------------
// 1. Connexion à la BDD
//-----------------------------------------------------
// Inclusion du fichier "dbconnect.php" qui exécute la connexion à la base 
// de données
require_once "db_connect.php";
//-----------------------------------------------------
// 2. Définition des variables
//-----------------------------------------------------
// La définition des variables suivante nous permet d'éviter les erreurs de 
// variables inconnue dans le fichier "form.php"
$title = null;
$description = null;
$year = null;
$cover = null;
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
    $title          = isset($_POST['title']) ? trim(htmlentities($_POST['title'])) : null;
    $description    = isset($_POST['description']) ? trim(htmlentities($_POST['description'])) : null;
    $year           = isset($_POST['year']) ? trim(htmlentities($_POST['year'])) : null;
    $cover          = isset($_FILES['cover']) ? $_FILES ['cover'] : null;

    /* 3. Controle des données */
    // Controle du champ $title
    // Le titre est obligatoire (pas vide, pas null)
    if (strlen($title) <= 0) {
        $errors['title'] = "Le titre ne doit pas être vide";
    }
    // Controle du champ $description
    // La description dot avoir au moins 10 caractères
    if (strlen($description) < 10) {
        $errors['description'] = "Le description doit contenir au moins 10 caractères";
    }
    // Controle du champ $year
    // L'année doit être un entier
    // dont la valeur est comprise entre l'année courante et l'année courante moins 100
    if ($year == null || strlen($year) <= 0) {
        $errors['year'] = "L'année n'est pas valide (1)";
    }
    else {
        $year = +$year;
        // if ( !(+date('Y') >= $year && (date('Y')-100) <= $year) ) {
        if ( +date('Y') < $year || (date('Y')-100) > $year ) {
            $errors['year'] = "L'année n'est pas valide (2)";
        }
    }

    /*4. Traitement de l'image*/
    if ($cover != null && $cover['error'] == 0)
    {
        //Controle du fichier image Le fichier doit avoir l'extension .jpg .jpeg .gif ou .png
        if (!preg_match("/\.(jpg|jpeg|gif|png)$/", $cover['name'], $matches))
        {
            $errors['cover'] = "Le type de l'image n'set pas valide";
        }

        //COntrole de la taille du fichier
        if($cover['size'] > 2000000) {
            $errors['cover'] = "La taille de l'image est supérieur à 2Mo.";
        }

        if (empty($errors))
        {
        //Récupération de l'extension d'origine
        $pathinfo = pathinfo($cover['name']);
        $extension = $pathinfo['extension']; 

        //définition du nom de fichier, celui-ci doit être unique
        $filename = uniqid();
        $filename.="".$extension;

        $filepath = "images/".$filename; /*définition de l'emplacement du fichier*/

        //Déplacement du fichier vers répertoire "images/"
        copy($cover['tmp_name'], $filepath);

        //Association de l'image à la fiche du film (voir partie 5)
        
        }
    }
    

    /* 5. Enregistrement des données dans la BDD */
    if (empty($errors)) 
    {
        // Définition de la requete
        $sql = "INSERT INTO film (`title`,`description`,`year`,`cover`) VALUES (:title,:description,:year,:cover)";
        // Préparation de la requête
        $q = $db->prepare($sql);
        $q->bindParam(':title', $title);
        $q->bindParam(':description', $description);
        $q->bindParam(':cover', $filename);
        $q->bindParam(':year', $year, PDO::PARAM_INT);
        // Execution de la requete
        $q->execute();
        // Récupération du dernier ID que j'ai ajouter à la base de données
        $id = $db->lastInsertId();
        // Redirection de l'utilisateur vers la page de détail du film
        header("location: read.php?id=".$id);
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
    <title>Creation d'un film</title>
</head>
<body>
    
    <h1>Ajouter un film</h1>

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