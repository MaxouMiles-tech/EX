<html>

<body>
<h3>Exercice 1 : Ecrivez une fonction qui permette de générer un lien.</h3>
<?php
function genereLien($lien, $titre)
{
    echo '<a href="' . $lien . '">' . $titre . '</a>';
}

genereLien("https://www.reddit.com/", "Reddit Hug");
?>

<hr>
<h3>Exercice 2 : Ecrivez une fonction qui calcul la somme des valeurs d'un tableau.</h3>
<?php
$tab = array(4, 3, 8, 2);
$resultat = somme($tab);
function somme($tab)
{
    $somme = 0;
    foreach ($tab as $value) {
        $somme += $value;
    }
    return $somme;
}

echo $resultat;
?>

<hr>
<h3>Exercice 3 : Créer une fonction qui vérifie le niveau de complexité d'un mot de passe.</h3>
