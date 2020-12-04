<?php
require_once("../controllers/addController.php");
include('header.php');
?>
<!--------------------------------------------------------------------------------------------------------------------->
<!--formulaire-->
<!--------------------------------------------------------------------------------------------------------------------->
<div class="row mt-3 mb-1 mx-0">
    <div class="col h2 p-3 text-center">Ajouter un vinyle</div>
</div>
<!-- formulaire d'ajout d'un produit -->
<!-- debut du formulaire : redirection vers le script php -->
<!-- utilisation de enctype pour le chargement de l'image  -->
<form class="p-5" action="../PHP/add_script.php " method="POST" enctype="multipart/form-data" id="verifadd"
      name="verifadd">
    <div class="form-group">
        <label for="title">Titre : </label>
        <input type="text" required class="form-control" name=title id="title" placeholder="Entrez le titre">
    </div>
    <!-- balise paragraphe pour l'affichage d'erreur js -->
    <p id="errorTitle" class="text-danger"></p>

    <div class="form-group">
        <label for="artist">Artiste : </label>
        <select class="form-control" required name="artist" id="artist">
            <option value=""></option>
            <?php
            // liste déroulante pour afficher les artistes existants
            while ($artist = $result->fetch(PDO::FETCH_OBJ)) {
                echo '<option value="' . $artist->artist_id . '">' . $artist->artist_name . '</option>';
            }
            ?>
        </select>
    </div>
    <p id="errorArtist" class="text-danger"></p>

    <div class="form-group">
        <label for="year">Année : </label>
        <input type="number" class="form-control" name="year" id="year" required placeholder="Entrez l'année">
    </div>
    <p id="errorYear" class="text-danger"></p>

    <div class="form-group">
        <label for="genre">Genre : </label>
        <input type="text" class="form-control" required name="genre" id="genre"
               placeholder="Entrez le genre (Rock, Pop, Prog ...)">
    </div>
    <p id="errorGenre" class="text-danger"></p>

    <div class="form-group">
        <label for="label">Label : </label>
        <input type="text" class="form-control" name="label" id="label"
               placeholder="Entrez le label 'EMI, Warmer, PolyGram, Univers sale ...)">
    </div>
    <p id="errorLabel" class="text-danger"></p>

    <div class="form-group">
        <label for="price">Prix : </label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Entrez le prix">
    </div>
    <p id="errorPrice" class="text-danger"></p>

    <div class="form-group">
        <label for="photo">Photo du vinyle :</label><br>
        <input type="file" name="photo"><br/>
    </div>
    <p id="errorPhoto" class="text-danger"></p>

    <!-- bouttons -->
    <button type="submit" class="btn btn-warning mt-3">Ajouter</button>
    <a href="list.php" title="retour" role="button" class="btn btn-dark active mt-3">Retour</a>
</form>


<?php
include('footer.php');
?>
