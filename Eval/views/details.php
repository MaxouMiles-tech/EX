<?php
require_once("../controllers/detailsController.php");
include('header.php');
?>


<!-- formulaire d'affichage des details disc : pas de possibilite d'ecriture-->
<!-- titre de la page  -->
<div class="row mt-5 mx-auto -flex justify-content-between">
    <div class="col-6 col-md-3 h2 text-center">Détails
    </div>
</div>
<hr>
<div class="row p-5 m-auto d-flex flex-column justify-content-around">
    <div class=" col d-flex flex-row justify-content-center">
        <!-- afichage de l'image-->
        <div class="col-md-6">
            <img class='mx-auto d-block img-fluid w-md-50' src=" <?= $pathImg ?> " alt=" <?= $disc->disc_picture ?> "
                 title="<?= $disc->disc_title ?> ">
        </div>
        <!-- bouttons -->
        <div class="d-flex flex-column justify-content-end">
            <a href="list.php" title="retour" role="button" class="btn btn-dark active mt-3">Retour</a>
            <a href="update_form.php?id= <?= $disc_id ?>" class="btn btn-warning mt-3">Modifier</a>
            <a href=javascript:void(0) role="button" onclick="confirmation(<?php echo $disc_id ?>)"
               class="btn btn-danger mt-3">Supprimer</a>
        </div>
    </div>
</div>
<!-- pas de redirection dans action car formulaire d'affichage seulement  -->
<div class="row my-5  p-0 m-0">
    <form class="col d-flex flex-row flex-wrap justify-content-center" action="#" method="POST" id="formdetail"
          name="formdetail">

        <div class="col-md-5 form-group">
            <label for="title">Titre : </label>
            <input readonly type="text" class="form-control" placeholder="<?php echo $title ?>" id="title">
        </div>

        <div class="col-md-5  form-group">
            <label for="artist">Artiste : </label>
            <input readonly type="text" class="form-control" placeholder="<?php echo $artist ?>" id="artist">
        </div>

        <div class="col-md-5 form-group">
            <label for="year">Année : </label>
            <input readonly type="number" readOnly class="form-control" placeholder="<?php echo $year ?>" id="year">
        </div>

        <div class="col-md-5 form-group">
            <label for="genre">Genre : </label>
            <input readOnly class="form-control overflow-auto" placeholder="<?php echo $genre ?>" id="genre">
        </div>

        <div class="col-md-5 form-group">
            <label for="label">Label : </label>
            <input readOnly class="form-control overflow-auto" placeholder="<?php echo $label ?>" id="label">
        </div>

        <div class="col-md-5 form-group">
            <label for="price">Prix : </label>
            <input type="text" readOnly class="form-control" placeholder="<?php echo $price; ?>" id="price">
        </div>
    </form>
</div>

<!-- script js pour la confirmation de suppression en alert avec redirection vers les bonnes pages-->
<script type=" text/javascript" language="javascript">
    function confirmation(id) {
        if (confirm("Would you like to delete this disc : <?php echo $title; ?>?")) {
            window.location.href = "../PHP/delete_script.php?id=" + id;
        } else {
            window.location.href = "list.php";
        }
    }
</script>
