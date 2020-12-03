<?php

require "../src/connexion.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion

// requete pour recuperer le nombre de disques
$request = "SELECT count(disc_id) as 'count' FROM record.disc";
$result = $db->query($request);
$row = $result->fetch(PDO::FETCH_OBJ);
$count = $row -> count;



// requete pour recuperer toutes les infos disque
$requete = "SELECT * FROM record.disc join record.artist on disc.artist_id = artist.artist_id ";
$result = $db->query($requete);
