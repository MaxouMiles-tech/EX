<html lang="fr">
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exo PHP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<h3>Exercice 1 : Lecture d'un fichier.</h3>
<?php
$liste = file("fichier.txt");
// Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne
foreach ($liste as $numeros => $liens) {
    echo 'Lien n°' . $numeros . ' : <a href="' . $liens . '">' . $liens . "</a><br>";
}
?>

<h3>Exercice 2 : Récupération d'un fichier distant.</h3>
<div class="col-9 m-auto">
    <table class="table  mt-5">
        <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Département</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $liste = file('http://bienvu.net/misc/customers.csv');
        foreach ($liste as $cle) {
            $caracteristique = explode(",", $cle);
            ?>
            <tr>
                <?php
                for ($i = 0; $i <= 5; $i++) {
                    echo '<td>' . $caracteristique[$i] . '</td>';
                }
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
