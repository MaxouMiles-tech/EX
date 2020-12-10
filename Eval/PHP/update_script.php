<?php
require "../src/connexion.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion

//---------------------------------------------------------------------------------------------------------------------
//verification formulaire
//---------------------------------------------------------------------------------------------------------------------
//variable necessaire à la validation du formulaire
$check = true;

// gestion du telechargement de la photo
if (!empty($_FILES["photo"]["name"])) {
    $photo = $_FILES["photo"]["name"];
// On met les types autorisés dans un tableau (ici pour une image)
    $aMimeTypes = array("image/ai", "image/eps", "image/jpeg", "image/gif", "image/pdf", "image/jpg", "image/png", "image/psd", "image/tiff", "image/svg");

// On extrait le type du fichier via l'extension FILE_INFO
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $_FILES["photo"]["tmp_name"]);
    finfo_close($finfo);

    if (in_array($mimetype, $aMimeTypes, true)) {
        if (isset($_FILES['photo']) && $_FILES["photo"]["error"] === 0) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/images/' . $photo);
        } else {
// Le type n'est pas autorisé, donc ERREUR
            echo "Type de fichier non autorisé";
            exit;
        }
    } else {
// on garde l'extention existant (input hidden)
        $photo = $_POST['photo'];
    }
}

//validation des champs necessaires du formulaire
//ces champs ne doivent pas etre vide sinon renvoie false ce qui empeche l'envoi du formulaire
$filtreText = '/^[\w\s]+$/';
$filtreAnnee = '/^[012][0-9]{3}$/';
$filtrePrice = '/(\d+\.\d{1,2})/';

if (isset($_POST['submit'])) {

    if (!empty($_POST['id'])) {
        $id =$_POST['id'];
    }

    if (!empty($_POST['photo'])) {
        $photo = $_POST['photo'];
    }

    if (!empty($_POST['title']) && preg_match($filtreText, $_POST['title'])) {
        $title = $_POST['title'];
    }
} else {
    echo "Le titre doit être renseignée ! <br>";
    $check = false;
}

if (!empty($_POST['artist'])) {
    $artist = $_POST['artist'];
} else {
    echo "L'artiste doit être renseignée ! <br>";
    $check = false;
}

if (!empty($_POST['year']) && preg_match($filtreAnnee, $_POST['year'])) {
    $year = $_POST['year'];
} else {
    echo "L'année doit être renseignée ! <br>";
    $check = false;
}

if (!empty($_POST['genre']) && preg_match($filtreText, $_POST['genre'])) {
    $genre = $_POST['genre'];
} else {
    echo "Le genre doit être renseignée ! <br>";
    $check = false;
}

if (!empty($_POST['label']) && preg_match($filtreText, $_POST['label'])) {
    $label = $_POST['label'];
} else {
    echo "Le label doit être renseignée ! <br>";
    $check = false;
}

if (!empty($_POST['price']) && preg_match($filtrePrice, $_POST['price'])) {
    $price = $_POST['price'];
} else {
    echo "Le prix doit etre sous la forme XX.XX! <br>";
    $check = false;
}

//si le formulaire est valide on execute la modif avec une requete preparee
if ($check) {
    $stmt = $db->prepare('UPDATE disc 
                                    SET disc_title =:title ,disc_year =:year,disc_picture =:picture, disc_label =:label,disc_genre =:genre, disc_price =:price, artist_id =:artist
                                    Where disc_id =:id');

    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->bindParam(":title", $title, PDO::PARAM_STR);
    $stmt->bindParam(":year", $year, PDO::PARAM_INT);
    $stmt->bindParam(":picture", $photo, PDO::PARAM_STR);
    $stmt->bindParam(":label", $label, PDO::PARAM_STR);
    $stmt->bindParam(":genre", $genre, PDO::PARAM_STR);
    $stmt->bindParam(":price", $price, PDO::PARAM_INT);
    $stmt->bindParam(":artist", $artist, PDO::PARAM_STR);

    $stmt->execute();


//redirection vers la page du catalogue
    header("Location:../views/list.php");
}















