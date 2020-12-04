<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href='../assets/css/app.css'/>
</head>

<body>
<!--------------------------------------------------------------------------------------------------------------------->
<!--header-->
<!--------------------------------------------------------------------------------------------------------------------->

<div class="container-fluid p-0 m-0">
    <!--banniere-->
    <div>
        <img class="img-fluid vw-100" src="../assets/images/banniere.jpg" alt="Bannière Musique"
             title="Bannière musique" id="banniere">
    </div>
    <div class="card-img-overlay text-white d-flex justify-content-center align-items-lg-end h-25" id="titreBanniere">
        <h1 >Toute la musique</h1>
    </div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark p-3 ">
        <a class="navbar-brand" href="../index.php" hidden>Music.com</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNav">
            <ul class="navbar-nav m-auto text-center">
                <li class="nav-item active ">
                    <a class="nav-link p-0" href="list.php">Catalogue<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>




    <!--//$requete = $db->prepare("select * from disc where disc_id=?");-->
    <!--//$requete->execute(array($_GET["disc_id"]));-->
    <!---->
    <!---->
    <!---->
    <!--//$disc = $requete->fetch(PDO::FETCH_OBJ);-->
    <!--//-->
    <!--//-->
    <!--//if (!$disc)-->
    <!--//{-->
    <!--//    $tableauErreurs = $db->errorInfo();-->
    <!--//    echo $tableauErreurs[2];-->
    <!--//    die("Erreur dans la requête");-->
    <!--//}-->
    <!--?>-->

