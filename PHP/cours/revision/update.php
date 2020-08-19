<?php
//==============================================================================
// MODIFICATION D'UN FILM
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
// Définition de la variable $id
// On récupère de l'identifiant du film depuis le paramètre "id" trasmit dans
//  l'URL. e.g.: www.site.com?id=42
$id = isset($_GET['id']) ? trim($_GET['id']) : null;
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
    /* 4. Enregistrement des données dans la BDD */
    if (empty($errors)) 
    {
        // Définition de la requete
        // $sql = "INSERT INTO film (`title`,`description`,`year`) VALUES (:title,:description,:year)";
        $sql = "UPDATE film SET `title`=:title, `description`=:description, `year`=:year WHERE `id`=:id ";
        // Préparation de la requête
        $q = $db->prepare($sql);
        $q->bindParam(':title', $title);
        $q->bindParam(':description', $description);
        $q->bindParam(':year', $year, PDO::PARAM_INT);
        $q->bindParam(':id', $id, PDO::PARAM_INT);
        // Execution de la requete
        $q->execute();
        // Redirection de l'utilisateur vers la page de détail du film
        header("location: read.php?id=".$id);
        exit;
    }
}
//-----------------------------------------------------
// 5. Recupération des données dans la BDD
//-----------------------------------------------------
// Si $id est de type numerique (digit), on prpcède à la récupération des 
// données du film
if (ctype_digit($id)) 
{
    // Définition de la requete
    $sql = "SELECT `id`, `title`, `description`, `year`, `cover` FROM `film` WHERE id=:id";
    // Préparation de la requete
    $q = $db->prepare($sql);
    $q->bindParam(':id', $id, PDO::PARAM_INT);
    // Execution de la requete
    $q->execute();
    // Récupération des données
    // Resultats sous forme de tableau associatif
    // $film = $q->fetch(PDO::FETCH_ASSOC); // $film['title']
    // Résultat sous forme d'objet stdClass 
    $film = $q->fetch(PDO::FETCH_OBJ); // $film->title
    $title = $film->title;
    $description = $film->description;
    $year = $film->year;
    $cover = $film->cover;
}
//-----------------------------------------------------
// 6. Affichage des données en HTML (dans le form)
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
    <h1>Modifier un film</h1>

    <form method="post">

        <?php 
        // Inclusion du fichier "form.php"
        // Le fichier form.php contient le formulaire commun à "create.php" et 
        // "update.php"
        include "form.php" 
        ?>

        <button type="submit">Modifier</button>
    </form>

    <a href="delete.php?id=<?= $id ?>">Supprimer ce film</a>

</body>
</html>