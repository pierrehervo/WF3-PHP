<?php
//==============================================================================
// SUPPRESSION D'UN FILM
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
// On déclare $film avec une valeur par defaut
// Plutard, nous executerons une requête pour récupérer les données du film
// Si la requête ne trouve aucun résultat, PDO retournera FALSE
$film = false;
//-----------------------------------------------------
// 3. Recupération des données dans la BDD
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
}
//-----------------------------------------------------
// 4. Suppression du film, puis redirection
//-----------------------------------------------------
// On test la methode utilisé par la requête HTTP, 
// Si la méthode est du type POST, on peut traiter les données du formilaire
if ($_SERVER['REQUEST_METHOD'] === "POST" && $film) { 
    // Définition de la requete
    $sql = "DELETE FROM `film` WHERE id=:id";
    // Préparation de la requete
    $q = $db->prepare($sql);
    $q->bindParam(':id', $id, PDO::PARAM_INT);
    // Execution de la requete
    $q->execute();
    // Redirection de l'utilisateur vers la page de détail du film
    header("location: index.php");
    exit;
}
//-----------------------------------------------------
// 5. affichage HTML du message de demande de confirmation de suppression
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
    
    <h1>Suppression du film : <?= $title ?></h1>

    <p>Confirmer la suppression du film : "<?= $title ?>"</p>

    <form method="post">
        <button type="submit">OUI</button>
    </form>
    
    <a href="read.php?id=<?= $id ?>">NON</a>
</body>
</html>