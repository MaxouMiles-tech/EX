<?php
//require_once("../controllers/updateController.php");
require_once("../controllers/updateController.php");
include('header.php');
?>


<!-- titre de la page  -->
<div class="row mt-5 mx-auto -flex justify-content-between">
    <div class="col-6 col-md-3 h2 text-center">Modifier un vinyle
    </div>
</div>
<hr>

<!-- afichage de l'image-->
<div class="p-5">
    <img class='mx-auto d-block img-fluid w-md-25' src=" <?= $pathImg ?> " alt=" <?= $disc->disc_picture ?> "
         title="<?= $disc->disc_title ?> ">
</div>

<!-- formulaire de modification  -->
<!-- debut du formulaire : redirection vers le script php -->
<!-- utilisation de enctype pour le chargement de l'image    ../PHP/update_script.php-->
<form action="../PHP/update_script.php" method="POST" id="updateform" name="updateform" enctype="multipart/form-data" class="px-5">

    <!-- input invisible pour recuperer les informations de la base -->
    <input type="hidden" class="form-control" value="<?php echo $photo; ?>" name="photo" id="photo">
    <input type="hidden" class="form-control" value="<?php echo $disc_id; ?>" name="id" id="id">

    <div class=" form-group">
        <label for="title">Titre : </label>
        <input type="text" class="form-control" value="<?php echo $title ?>" id="title" name="title">
    </div>
    <p id="errorTitle" class="text-danger"></p>

    <div class="form-group">
        <?php
        //requete pour recuperer les id et les noms des categories
        $request = 'SELECT * FROM artist';
        $result2 = $db->query($request);
        // gestion de l'erreur
        if (!$result2) {
            $tableauErreurs = $db->errorInfo();
            echo $tableauErreur[2];
            die("Erreur dans la requête");
        }

        if ($result2->rowCount() === 0) {
//   Pas d'enregistrement
            die("La table est vide");
        }
        ?>

        <label for="artist">Artiste : </label>
        <select class="form-control" required name="artist" id="artist">
<?php
            // liste deroulante pour afficher les categories existantes et celle selectionée
            while ($art = $result2->fetch(PDO::FETCH_OBJ)) {
                $selected = "";
                if ($artist === $art->artist_name) {
                    $selected = "selected";
                }
                echo '<option value="' . $art->artist_id . '" ' . $selected . '>' . $art->artist_name. ' </option>';
            }
            ?>
        </select>
    </div>
    <p id="errorArtist" class="text-danger"></p>

    <div class=" form-group">
        <label for="year">Année : </label>
        <input type="text" class="form-control" value="<?php echo $year ?>" id="year" name="year">
    </div>
    <p id="errorYear" class="text-danger"></p>

    <div class=" form-group">
        <label for="genre">Genre : </label>
        <input class="form-control overflow-auto" value="<?php echo $genre ?>" id="genre" name="genre">
    </div>
    <p id="errorGenre" class="text-danger"></p>

    <div class="form-group">
        <label for="label">Label : </label>
        <input class="form-control overflow-auto" value="<?php echo $label ?>" id="label" name="label">
    </div>
    <p id="errorLabel" class="text-danger"></p>

    <div class="form-group">
        <label for="price">Prix : </label>
        <input type="text" class="form-control" value="<?php echo $price; ?>" id="price" name="price">
    </div>
    <p id="errorPrice" class="text-danger"></p>

    <div class="form-group pt-3">
        <label for="photo">Télécharger la photo du disque :</label><br>
        <input type="file" name="photo"><br>
    </div>
    <p id="errorPhoto" class="text-danger"></p>

    <!-- bouttons -->
    <div class="pb-5">
        <a href="details.php?id=<?= $disc_id?>" title="retour" role="button" class="btn btn-dark active mr-3 mt-3">Retour</a>
        <button id="submit" name="submit" type="submit" role="button" class="btn btn-warning mt-3">Envoyer</button>
    </div>
</form>

<!-- script js -->
<script src="../assets/js/update.js"></script>

<?php
include('footer.php');
?>
