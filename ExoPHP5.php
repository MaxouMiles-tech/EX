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

<?php
function complex_password($mdp)
{
    $value = 0;
    $valueInt = 0;
    $valueUp = 0;
    $length = strlen($mdp);

    if ($length >= 8) {
        for ($i = 0; $i < $length; $i++) {
            $lettre = $mdp[$i];

            if ($lettre >= '0' && $lettre <= '9') {
                $valueInt = 1;
            }
            if ($lettre >= 'A' && $lettre <= 'Z') {
                $valueUp = 1;
            }
        }
        if ($valueUp === 1 && $valueInt === 1) {
            $value = 1;
        }
    }
    return $value;

}

$resultat = complex_password("TopSecret42");
echo $resultat;




