<?php
require_once("../controllers/detailsController.php");
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
<!-- utilisation de enctype pour le chargement de l'image  -->

<form action="../PHP/update_script.php" method="POST" id="updateform"
      name="updateform" enctype="multipart/form-data" class="px-5">

    <div class=" form-group">
        <label for="title">Titre : </label>
        <input type="text" class="form-control" placeholder="<?php echo $title ?>" id="title">
    </div>

    <div class="  form-group">
        <label for="artist">Artiste : </label>
        <input type="text" class="form-control" placeholder="<?php echo $artist ?>" id="artist">
    </div>

    <div class="form-group">
        <label for="year">Année : </label>
        <input type="number" class="form-control" placeholder="<?php echo $year ?>" id="year">
    </div>

    <div class=" form-group">
        <label for="genre">Genre : </label>
        <input class="form-control overflow-auto" placeholder="<?php echo $genre ?>" id="genre">
    </div>

    <div class="form-group">
        <label for="label">Label : </label>
        <input class="form-control overflow-auto" placeholder="<?php echo $label ?>" id="label">
    </div>

    <div class="form-group">
        <label for="price">Prix : </label>
        <input type="text" class="form-control" placeholder="<?php echo $price; ?>" id="price">
    </div>
</form>

<!-- bouttons -->
<div class="px-5 pb-5">
    <a href="list.php" title="retour" role="button" class="btn btn-dark active mt-3">Retour</a>
    <a <?php echo 'href="formulaire_modif.php?id=' . $disc_id . '"' ?> role="button"
                                                                       class="btn btn-warning mt-3">Envoyer</a>
</div>