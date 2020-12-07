<?php
require_once("../controllers/listController.php");
include('header.php');
?>
<!--------------------------------------------------------------------------------------------------------------------->
<!--catalogue-->
<!--------------------------------------------------------------------------------------------------------------------->
<div class="row mt-5 mx-auto -flex justify-content-between">
    <div class="col-6 col-md-3 h2 text-center"> Liste des disques (<?= $count ?>)
    </div>
    <div class="col-6 col-md-2 text-center">
        <a href="add_form.php" class="btn bg-dark text-white text-center px-3 py-2" role="button" id="add">Ajouter</a>
    </div>
</div>
<hr>

<div class="row p-5 m-auto justify-content-around">
    <?php
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        ?>
        <div class="col-xs-3 card border-0 m-2">
            <div class="row ">
                <div class="col-sm-5 d-flex align-items-center">
                    <img class="card-img img-fluid" src="../assets/images/<?= $row->disc_picture ?>"
                         alt="<?= $row->disc_title ?>">
                </div>
                <div class="col-sm-7">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title"><?= $row->disc_title ?></h4>
                        <h5 class="card-subtitle"><?= $row->artist_name ?></h5>
                        <div>
                            <div class="card-text"><b>Label : </b><?= $row->disc_label ?></div>
                            <div class="card-text"><b>Année : </b><?= $row->disc_year ?></div>
                            <div class="card-text"><b>Genre : </b><?= $row->disc_genre ?></div>
                        </div>

                        <a href="details.php?id=<?= $row->disc_id ?>" class="btn bg-dark mt-3 text-white align-self-end">Détails</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    ?>
</div>


<?php
include('footer.php');
?>
