// validation java du formulaire d'ajout
document.querySelector("#verifadd").onsubmit = function checkForm() {
// variable a true qui sera verfifier à chaque condition
    let check = true;

//creation des variable obligatoire:  on recupere les valeurs entrées grace à l'identifiant
    let title = document.getElementById("title").value;
    let artist = document.getElementById("artist").value;
    let year = document.getElementById("year").value;
    let genre = document.getElementById("genre").value;
    let label = document.getElementById("label").value;
    let price = document.getElementById("price").value;

// regex qui accepte tous les caracteres de l'alphabet, underscore et espaces avec un min d'un caractere
    let filtretextnum = new RegExp(/^[\w\s]+$/);
// chaque champ est teste par l'expression reguliere et retourne la variable à false
    if (!filtretextnum.test(title)) {
// un message d'erreur est ecrit à la suite du champ
        document.getElementById("errorTitle").innerHTML = "Le titre doit comporter au moins 1 caractère !";
        check = false;
    }
// reinitialise le champ erreur
    else {
        document.getElementById("errorTitle").innerHTML = "";
    }

    if (artist === "") {
        document.getElementById("errorArtist").innerHTML = "L'artiste doit être renseignée !";
        check = false;
    } else {
        document.getElementById("errorArtist").innerHTML = "";
    }

// regex pour l'annee
    let filtreAnnee = new RegExp(/^[012][0-9]{3}$/);
// chaque champ est teste par l'expression reguliere et retourne la variable à false
    if (!filtreAnnee.test(year)) {
// un message d'erreur est ecrit à la suite du champ
        document.getElementById("errorYear").innerHTML = "L'année doit comporter au moins 1 caractère !";
        check = false;
    }
// reinitialise le champ erreur
    else {
        document.getElementById("errorYear").innerHTML = "";
    }

    if (!filtretextnum.test(genre)) {
        document.getElementById("errorGenre").innerHTML = "Le genre doit comporter au moins 1 caractère !";
        check = false;
    }
// reinitialise le champ erreur
    else {
        document.getElementById("errorGenre").innerHTML = "";
    }

    if (!filtretextnum.test(label)) {
        document.getElementById("errorLabel").innerHTML = "Le label doit comporter au moins 1 caractère !";
        check = false;
    }
// reinitialise le champ erreur
    else {
        document.getElementById("errorLabel").innerHTML = "";
    }

//regex pour controler le format du prix
    let filtreprice = new RegExp(/^[0-9]+[.|,]?[0-9]{0,2}$/)
    if (!filtreprice.test(price)) {
        document.getElementById("errorPrice").innerHTML = "Le prix n'est pas au bon format, utilise une virgule ou un point ! !";
        check = false;
    } else {
        document.getElementById("errorPrice").innerHTML = "";
    }

// si tout se passe bien la variable est retourner sans modification
    return check;
}
