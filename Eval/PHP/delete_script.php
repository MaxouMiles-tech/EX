<?php
//---------------------------------------------------------------------------------------------------------------------
//connexion à la BDD
//---------------------------------------------------------------------------------------------------------------------
require "../src/connexion.php";
$db = connexionBase();

//---------------------------------------------------------------------------------------------------------------------
//Requete
//---------------------------------------------------------------------------------------------------------------------
//recuperation de l'id passe en parametre dans l'url
$disc_id = $_GET["id"];

// requette pour recuperer le nom de la photo
$requete = 'SELECT disc_picture from disc
                    where disc_id=' . $disc_id;

// stockage du resultat sous forme d'objet
$result = $db->query($requete);

//affecte a $produit la premiere ligne du resultat sous forme de tableau d'objets
$disc = $result->fetch(PDO::FETCH_OBJ);

//on recupere l'element de la colonne(pro_photo) de la ligne recupere
$photo = $disc->disc_picture;


//requete de suppression
$query = "DELETE FROM disc Where disc_id  = $disc_id";

/* Envoie de la requête */
$result = $db->query($query);

if ($result) {
    $chemin = '../../assets/images/' . $disc_picture;

// suppression de l'image dans le dossier en local
    unlink($chemin);

//redirection vers la page du catalogue
    header("Location:../views/list.php");
}
