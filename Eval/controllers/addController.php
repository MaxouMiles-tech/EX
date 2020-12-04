<?php
//---------------------------------------------------------------------------------------------------------------------
//connexion à la BDD
//---------------------------------------------------------------------------------------------------------------------
require "../src/connexion.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion

//---------------------------------------------------------------------------------------------------------------------
//Requete
//---------------------------------------------------------------------------------------------------------------------
//requete pour recuperer les id et les noms des artistes
$requete = "SELECT artist_id, artist_name  FROM artist";
$result = $db->query($requete);

// gestion de l'erreur
if (!$result) {
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreur[2];
    die("Erreur dans la requête");
}

if ($result->rowCount() === 0) {
//   Pas d'enregistrement
    die("La table est vide");
}

