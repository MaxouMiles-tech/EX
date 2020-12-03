
<html>

<body>
<h2>Exercice 1 : Mois de l'année non bissextile</h2>
<?php
$annee = array(
    "Janvier" => "31",
    "Fevrier" => "28",
    "Mars" => "31",
    "Avril" => "30",
    "Mai" => "31",
    "Juin" => "30",
    "Juillet" => "31",
    "Aout" => "31",
    "Septembre" => "30",
    "Octobre" => "31",
    "Novembre" => "30",
    "Decembre" => "31"
);


echo "<h3> Nombre de jours par mois </h3>";
foreach ($annee as $mois => $nbreJours) {
    echo $mois . " : " . $nbreJours . " jours <br>";
}

echo "<hr>";

asort($annee);
echo "<h3> Nombre de jours par mois : tableau triée </h3>";
foreach ($annee as $mois => $nbreJours) {
    echo $mois . " : " . $nbreJours . " jours <br>";
}
?>

<hr>

<h2>Exercice 2 : Capitales</h2>

<?php

$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

ksort($capitales);
echo "<h3>Capitales triées suivies du nom du pays</h3>";
foreach ($capitales as $ville => $pays) {
    echo "La ville " . $ville . " est la capitale du pays " . $pays . " <br>";
}

echo "<hr>";

asort($capitales);
echo "<h3>Pays triés suivies du nom de la capitales </h3>";
foreach ($capitales as $ville => $pays) {
    echo "La capitale du pays " . $pays . " est " . $ville . " .<br>";
}

echo "<hr>";

echo "<h3>Nombre de pays dans le tableau </h3>";
$nbPays = count($capitales);
echo "Le nombre de pays est de " . $nbPays . " .<br>";

echo "<hr>";

echo "<h3>Tableau avec les capitales commencant par la lettre 'B'</h3>";
foreach ($capitales as $ville => $pays) {
    if (substr($ville, 0, 1) === "B") {
        echo "La ville " . $ville . " est la capitale du pays " . $pays . " <br>";
    } else {
        unset($capitales[array_search($pays, $capitales, true)]);
    }
}
?>

<hr>

<h2>Exercice 3 : Départements</h2>

<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

asort($departements);
echo "<h3>Régions triées suivies du nom des départements</h3>";
foreach ($departements as $regions => $dep) {
    echo "<Br> La région " . $regions . " est composé de : ";
    foreach ($dep as $depart => $ville2) {
        echo $ville2 . " , ";
    }
};

echo "<hr>";

echo "<h3>Régions suivie du nombre de départements</h3>";
foreach ($departements as $regions => $dep) {
    echo "La région " . $regions . " est composé de : ";
    echo count($dep) . " départements. <br> ";
}
?>

</body>

</html>