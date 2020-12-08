<?php
//---------------------------------------------------------------------------------------------------------------------
//connexion à la BDD
//---------------------------------------------------------------------------------------------------------------------
require "../src/connexion.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion

//---------------------------------------------------------------------------------------------------------------------
//Requete
//---------------------------------------------------------------------------------------------------------------------
//recuperation de l'id passe en parametre dans l'url
$disc_id = $_GET["id"];

// requete pour recuperer toutes les infos produits
$requete = "SELECT * FROM record.disc 
            JOIN record.artist ON disc.artist_id = artist.artist_id
            WHERE disc_id=" . $disc_id;
$result = $db->query($requete);

// gestion de l'erreur
if (!$result)
{
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreurs[2];
    die("Erreur dans la requête");
}

if ($result->rowCount() === 0)
{
// Pas d'enregistrement
    die("La table est vide");
}
// Renvoi de l'enregistrement sous forme d'un objet
$disc = $result->fetch(PDO::FETCH_OBJ);



//---------------------------------------------------------------------------------------------------------------------
// declaration de variable recuperer sur la base de donnee
$title = $disc->disc_title;
$artist = $disc->artist_name;
$year = $disc->disc_year;
$genre = $disc->disc_genre;
$label = $disc->disc_label;
$price = $disc->disc_price;
$photo = $disc->disc_picture;

//---------------------------------------------------------------------------------------------------------------------
// gestion de l'image
$pathImg = '../assets/images/' . $photo;
// si l'image n'est pas charger: image par defaut
if (!file_exists($pathImg)) {
    $pathImg = '../assets/erreurImage.jpg';
}
