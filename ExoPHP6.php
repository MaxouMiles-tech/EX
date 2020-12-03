<html>

<body>
<h3>Exercice 1 : Trouvez le numéro de semaine de la date suivante : 14/07/2019.</h3>
<?php
$dateTest = "2019/07/14";
$dateformat = strtotime($dateTest);
echo "Numéro de semaine : " . date('W', $dateformat);
?>

<hr>
<h3>Exercice 2 : Combien reste-t-il de jours avant la fin de votre formation.</h3>
<?php
$fin = "2021/06/04";
echo 'Nombre de jours restant avant la fin de ma formation : ' . floor((strtotime($fin) - time()) / 86400) . ' jours';
?>

<hr>
<h3>Exercice 3 : Comment déterminer si une année est bissextile ?</h3>
<?php

function verifBissextile($year)
{
    echo "L'année " . $year . " est une année bissextil : " . (date('L', strtotime("$year-01-01")) ? 'Oui' : 'Non') . " .";
}

verifBissextile(2000);
?>

<hr>
<h3>Exercice 4 : Montrez que la date du 32/17/2019 est erronée.</h3>
<?php
$expDate = DateTime::createFromFormat("d/m/Y", "32/17/2019");

$errors = DateTime::getLastErrors();

if ($errors["error_count"] > 0 || $errors["warning_count"] > 0) {
    echo "La date n'est pas valide !";
} else {
    echo "La date est valide !";
}
?>

<hr>
<h3>Exercice 5 : Affichez l'heure courante sous cette forme : 11h25.</h3>
<?php
echo date("H:i");
?>

<hr>
<h3>Exercice 6 : Ajoutez 1 mois à la date courante.</h3>
<?php
echo date('d-m-Y', strtotime('+1 month'));
?>

<hr>
<h3>Exercice 7 : Que s'est-il passé le 1000200000.</h3>
<?php
$time = 1000200000;
echo date('d-m-Y', $time);
?>