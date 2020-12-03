<!-- 1. Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... -->
<html>

<body>
<?php
for ($a = 1; $a <= 150; $a++) {
    if ($a % 2 != 0) {
        echo $a . "<br>";
    }
}
echo "<hr>";
?>
</body>

</html>

<!-- 2. Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers. -->
<html>

<body>
<?php
$a = 1;
$b = "Je dois faire des sauvegardes régulières de mes fichiers.";
do {
    echo $a . " : " . $b . "<br>";
    $a++;
} while ($a <= 500);
echo "<hr>";
?>
</body>

</html>

<!-- 3. Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant : -->
<html>

<body>
<?php
$nbre = 12;
echo "Table de multiplication totale de {1,...,12} par {1,...,12}. <br>";
echo "<table>";
for ($y = 0; $y <= $nbre + 1; $y++) {
    echo "<tr style=\"border:double\">";
    for ($x = 0; $x <= $nbre + 1; $x++) {
        if (($y == 0) && ($x == 0)) {
            echo "<td style=\"border:double\"> </td>";
        } else if (($y == 0) && ($x > 0)) {
            echo "<td style=\"border:double\"><b>" . ($x - 1) . "</b></td>";
        } else if (($y > 0) && ($x == 0)) {
            echo "<td style=\"border:double\"><b>" . ($y - 1) . "</b></td>";
        } else {
            echo "<td style=\"border:double\">" . ($x - 1) * ($y - 1) . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table><hr>";
?>
</body>

</html>